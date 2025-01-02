@php
    $pop_up_data_sound=\App\Models\PopSetupData::get()->first();
@endphp

@if($pop_up_data_sound->status==1)
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .v_sound_pop-popup {
            position: fixed;
            z-index: 999;
            bottom: -150px;
            left: 20px;
            width: 400px;
            background-color: #0056b3;
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .v_sound_pop-popup img {
            width: 60px;
            height: auto;
            scale: 2;
            margin-bottom: 30px;
        }

        .v_sound_pop-popup button {
            background-color: #ffc107;
            color: black;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .v_sound_pop-popup button:hover {
            background-color: #e0a800;
        }

        .v_sound_pop-popup .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 18px;
            color: white;
            cursor: pointer;
        }

        .v_sound_pop-popup.show {
            bottom: 20px;
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <div class="v_sound_pop-popup" id="popup_v">
        <button class="close-btn" onclick="closePopup()">&times;</button>
        <img src="{{$pop_up_data_sound->image_icon}}" alt="{{$pop_up_data_sound->title}}">
        <h5 class="text-center">{{$pop_up_data_sound->title}}</h5>
        <p class="text-center">{{$pop_up_data_sound->description}}</p>
        <button onclick="contactUs()">{{$pop_up_data_sound->button_text}}</button>
    </div>

    <audio id="popupSound_v" src="{{asset('assets/sound/button-09a.wav')}}" preload="auto"></audio>

    <script>
        window.onload = function () {
            const popup = document.getElementById('popup_v');
            const popupSound = document.getElementById('popupSound_v');

            // Show the popup
            setTimeout(() => {
                popup.classList.add('show');
                popupSound.play(); // Play the sound
            }, {{($pop_up_data_sound->auto_come_time_in_second*1000)??1000}}); // Delay before showing the popup (1 second)

            // Auto-close the popup after 1 minute
            setTimeout(() => {
                popup.classList.remove('show');
            }, {{($pop_up_data_sound->auto_close_time_in_second*1000)??60000}}); // Close after 60000ms (1 minute)
        };

        function contactUs() {
            const redirectUrl = "{{ $pop_up_data_sound->redirect_url }}"; // Redirect URL from database
            window.location.href = redirectUrl;
        }

        function closePopup() {
            const popup = document.getElementById('popup_v');
            popup.classList.remove('show'); // Remove the show class to hide the popup
        }
    </script>


@endif
