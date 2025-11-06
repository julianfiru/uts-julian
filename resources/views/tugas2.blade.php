<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tugas 2 - DOM Manipulation</title>
      <script src="{{ asset('js/dom.js') }}"></script>
   </head>

   <body id="bd">
      <!-- Navigation Button -->
      <div class="nav-container">
         <a href="{{ url('tugas1') }}" class="btn-nav-tugas2">
            ← Back to Tugas 1
         </a>
      </div>

      <h1>Soal Essay: Document Object Model</h1>
      
      <div id="flower-images"> 
         <img id="img1" src="{{ asset('thumbnails/flo1.jpg') }}" alt="Flower 1">
         <img id="img2" src="{{ asset('thumbnails/flo2.jpg') }}" alt="Flower 2">
         <img id="img3" src="{{ asset('thumbnails/flo3.jpg') }}" alt="Flower 3">
      </div>

      <div>
         <p id="text1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <form action="#">
         <input type="button" id="chtext" value="Change Text Color">
         <input type="button" id="bccol" value="Change Background Color">
      </form>

      <!-- Pop-up Overlay -->
      <div id="popupOverlay" class="overlay">
         <div id="popupContent" class="popup-box">
            <h2 id="popupTitle">Pop-up Title</h2>
            <p id="popupText">This is the content of your pop-up window.</p>
            <input type="color" id="colorPicker" value="#000000">
            <br>
            <button id="applyColorBtn">OK</button>
            <button id="closePopupBtn">Close</button>
         </div>
      </div>

      <div id="basket" style="border-style:solid">
         <p id="basketstat">The flower basket currently contains 0 flowers.</p>
         <div id="basket-content"></div>
      </div>
   </body>
</html>