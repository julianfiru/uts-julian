<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tugas 2 - DOM Manipulation with Bootstrap</title>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <script src="{{ asset('js/dom.js') }}"></script>
   </head>

   <body id="bd" class="d-flex align-items-center justify-content-center min-vh-100">
   
      <div class="container mt-5" style="max-width: 1000px;">
         <div class="row">
            <div class="col-12">
               <h1 class="text-center mb-4">Soal Essay: Document Object Model</h1>
            </div>
         </div>

         <!-- Flower Images Section -->
         <div class="row">
            <div class="col-12">
               <div class="card shadow-sm mb-4">
                  <div class="card-body">
                     <h3 class="card-title">Select Flowers</h3>
                     <div id="flower-images" class="d-flex justify-content-center gap-3 flex-wrap"> 
                        <img id="img1" src="{{ asset('thumbnails/flo1.jpg') }}" alt="Flower 1" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover; cursor: pointer;">
                        <img id="img2" src="{{ asset('thumbnails/flo2.jpg') }}" alt="Flower 2" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover; cursor: pointer;">
                        <img id="img3" src="{{ asset('thumbnails/flo3.jpg') }}" alt="Flower 3" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover; cursor: pointer;">
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Text Paragraph Section -->
         <div class="row">
            <div class="col-12">
               <div class="card shadow-sm mb-4">
                  <div class="card-body">
                     <h3 class="card-title">Text Content</h3>
                     <p id="text1" class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- Control Buttons Section -->
         <div class="row">
            <div class="col-12">
               <div class="card shadow-sm mb-4">
                  <div class="card-body">
                     <h3 class="card-title">Color Controls</h3>
                     <div class="d-flex gap-2 flex-wrap">
                        <button type="button" id="chtext" class="btn btn-primary">
                           <i class="bi bi-palette"></i> Change Text Color
                        </button>
                        <button type="button" id="bccol" class="btn btn-success">
                           <i class="bi bi-paint-bucket"></i> Change Background Color
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Basket Section -->
         <div class="row">
            <div class="col-12">
               <div class="card shadow-sm mb-4" id="basket">
                  <div class="card-body">
                     <h3 class="card-title">Flower Basket</h3>
                     <p id="basketstat" class="alert alert-info">The flower basket currently contains 0 flowers.</p>
                     <div id="basket-content" class="d-flex gap-2 flex-wrap"></div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Navigation -->
         <div class="row">
            <div class="col-12">
               <div class="nav-container text-center">
                  <a href="{{ url('tugas1') }}" class="btn-nav-tugas2">
                     📄 Tugas 1
                  </a>
                  <a href="{{ url('tugas2') }}" class="btn-nav-tugas2" style="opacity: 0.6; pointer-events: none;">
                     📝 Tugas 2 (Current)
                  </a>
                  <a href="{{ url('tugas2ori') }}" class="btn-nav-tugas2">
                     📋 Tugas 2 Original
                  </a>
               </div>
            </div>
         </div>
      </div>

      <!-- Pop-up Overlay -->
      <div id="popupOverlay" class="overlay">
         <div id="popupContent" class="popup-box bg-white p-4 rounded shadow">
            <h2 id="popupTitle" class="mb-3">Pop-up Title</h2>
            <p id="popupText" class="mb-3">This is the content of your pop-up window.</p>
            <div class="mb-3">
               <label for="colorPicker" class="form-label">Choose Color:</label>
               <input type="color" id="colorPicker" value="#000000" class="form-control form-control-color">
            </div>
            <div class="d-flex gap-2">
               <button id="applyColorBtn" class="btn btn-primary">Apply</button>
               <button id="closePopupBtn" class="btn btn-secondary">Close</button>
            </div>
         </div>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   </body>
</html>