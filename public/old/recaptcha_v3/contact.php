<?php

// Server side validation
function isValid() {
    // This is the most basic validation for demo purpose. Replace this with your own server side validation
    if($_POST['name'] != "" && $_POST['email'] != "" && $_POST['message'] != "") {
        return true;
    } else {
        return false;
    }
}

$error_output = '';
$success_output = '';

if(isValid()) {
    // Build POST request to get the reCAPTCHA v3 score from Google
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcNg8gjAAAAAKfi7NBSyrqnRUrF3IZ2Btb3aZMI'; // Insert your secret key here
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned
    if ($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == 'contact') {
        // This is a human. Insert the message into database OR send a mail
        $success_output = "Your message sent successfully";
    } else {
        // Score less than 0.5 indicates suspicious activity. Return an error
        $error_output = "Something went wrong. Please try again later";
    }
} else {
    // Server side validation failed
    $error_output = "Please fill all the required fields";
}

$output = array(
    'error'     =>  $error_output,
    'success'   =>  $success_output
);

// Output needs to be in JSON format
echo json_encode($output);

?>