<div id="modalOverlay" class="modal-overlay p-3"  onclick="hideModal()">
{{--    <span class="closeImage text-danger desktop-display " style="position: absolute;top: 0;right: 20px;box-radius:25px;" onclick="hideModal()">--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">--}}
{{--  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>--}}
{{--</svg>--}}
{{--    </span> <!-- Add the close symbol here -->--}}
    <div id="modalContent" class="modal-content bg-white" style="width: 500px;" >
{{--        <span class="closeImage text-danger mobile-display" style="position: absolute;top: 0;right: 20px;" onclick="hideModal()"> x</span> <!-- Add the close symbol here -->--}}
        <span class="closeImage text-dark"  onclick="hideModal()">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg>

    </span> <!-- Add the close symbol here -->

        <img id="myImage" src="{{asset('assets/customer/images/zoom-in.png')}}" alt="Image" class="image-size" style="max-height: 100%;">
    </div>
</div>
