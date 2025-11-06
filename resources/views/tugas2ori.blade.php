<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tugas 2 Original - DOM Manipulation</title>
      <script src="{{ asset('js/domori.js') }}"></script>
      <style>
         /* HANYA STYLING UNTUK BUTTON NAVIGASI */
         .nav-container {
             text-align: center;
             padding: 30px 0;
             margin-top: 20px;
         }

         .btn-nav-tugas2 {
             display: inline-block;
             padding: 12px 30px;
             background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
             color: white;
             text-decoration: none;
             border-radius: 25px;
             font-weight: bold;
             font-size: 16px;
             box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
             transition: all 0.3s ease;
             border: 2px solid rgba(255, 255, 255, 0.3);
             margin: 20px;
         }

         .btn-nav-tugas2:hover {
             transform: translateY(-3px);
             box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
             background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
             color: white;
         }

         /* Basic popup styling */
         .overlay {
             display: none;
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background: rgba(0, 0, 0, 0.5);
             z-index: 999;
         }

         .popup-box {
             position: fixed;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             background: white;
             padding: 30px;
             border: 2px solid #333;
             z-index: 1000;
         }
      </style>
   </head>

   <body id="bd">
   
      <h1>Soal Essay: Document Object Model</h1>
      
      <div id="flower-images"> 
         <img id="img1" src="{{ asset('thumbnails/flo1.jpg') }}" alt="Flower 1" width="150" height="150">
         <img id="img2" src="{{ asset('thumbnails/flo2.jpg') }}" alt="Flower 2" width="150" height="150">
         <img id="img3" src="{{ asset('thumbnails/flo3.jpg') }}" alt="Flower 3" width="150" height="150">
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
            <br><br>
            <button id="applyColorBtn">OK</button>
            <button id="closePopupBtn">Close</button>
         </div>
      </div>

      <div id="basket" style="border: 2px solid black; padding: 20px; margin-top: 20px;">
         <p id="basketstat">The flower basket currently contains 0 flowers.</p>
         <div id="basket-content"></div>
      </div>

      <!-- Navigation Button -->
      <div class="nav-container">
         <a href="{{ url('tugas1') }}" class="btn-nav-tugas2">
            📄 Tugas 1
         </a>
         <a href="{{ url('tugas2') }}" class="btn-nav-tugas2">
            📝 Tugas 2
         </a>
         <a href="{{ url('tugas2ori') }}" class="btn-nav-tugas2" style="opacity: 0.6; pointer-events: none;">
            📋 Tugas 2 Original (Current)
         </a>
      </div>
      
   </body>
</html>