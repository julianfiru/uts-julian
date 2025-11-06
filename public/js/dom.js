document.addEventListener('DOMContentLoaded', function() {
    
    const changeTextBtn = document.getElementById('chtext');
    const changeBgBtn = document.getElementById('bccol');
    const popupOverlay = document.getElementById('popupOverlay');
    const popupContent = document.getElementById('popupContent');
    const popupTitle = document.getElementById('popupTitle');
    const popupText = document.getElementById('popupText');
    const colorPicker = document.getElementById('colorPicker');
    const applyColorBtn = document.getElementById('applyColorBtn');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const text1 = document.getElementById('text1');
    const body = document.getElementById('bd');
    const h1Title = document.querySelector('h1');
    const basketStat = document.getElementById('basketstat');
    const basketContent = document.getElementById('basket-content');
    const flowerImages = document.querySelectorAll('#flower-images img');
    
    let flowerCount = 0;
    let currentAction = '';
    
    popupOverlay.style.display = 'none';
    popupOverlay.style.position = 'fixed';
    popupOverlay.style.top = '0';
    popupOverlay.style.left = '0';
    popupOverlay.style.width = '100%';
    popupOverlay.style.height = '100%';
    popupOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    popupOverlay.style.zIndex = '1000';
    
    popupContent.style.backgroundColor = 'white';
    popupContent.style.padding = '20px';
    popupContent.style.border = '1px solid black';
    popupContent.style.position = 'fixed';
    popupContent.style.top = '50%';
    popupContent.style.left = '50%';
    popupContent.style.transform = 'translate(-50%, -50%)';
    
    // ubah teks button
    changeTextBtn.addEventListener('click', function() {
        currentAction = 'text';
        popupTitle.textContent = 'Change Text Color';
        popupText.textContent = 'Input your color:';
        popupOverlay.style.display = 'block';
    });
    
    // ubah warna button
    changeBgBtn.addEventListener('click', function() {
        currentAction = 'background';
        popupTitle.textContent = 'Change Background Color';
        popupText.textContent = 'Input your color:';
        popupOverlay.style.display = 'block';
    });
    
    // Apply warna si button 
    applyColorBtn.addEventListener('click', function() {
        if (currentAction === 'text') {
            text1.style.color = colorPicker.value;
            h1Title.style.color = colorPicker.value;
        } else if (currentAction === 'background') {
            body.style.backgroundColor = colorPicker.value;
        }
        popupOverlay.style.display = 'none';
    });
    
    // Ctutup popup
    closePopupBtn.addEventListener('click', function() {
        popupOverlay.style.display = 'none';
    });
    
    popupOverlay.addEventListener('click', function(e) {
        if (e.target === popupOverlay) {
            popupOverlay.style.display = 'none';
        }
    });
    
    // Update bbasket
    function updateBasketStatus() {
        basketStat.textContent = 'The flower basket currently contains ' + flowerCount + ' flower' + (flowerCount !== 1 ? 's' : '') + '.';
    }
    
    // bunga masuk basket
    function addFlowerToBasket(originalImg) {
        flowerCount++;
        
        const flowerCopy = document.createElement('img');
        flowerCopy.src = originalImg.src;
        flowerCopy.style.cursor = 'pointer';
        
        flowerCopy.addEventListener('click', function() {
            removeFlowerFromBasket(flowerCopy);
        });
        
        basketContent.appendChild(flowerCopy);
        updateBasketStatus();
    }
    
    // Bunga keluar basket
    function removeFlowerFromBasket(flowerImg) {
        flowerCount--;
        basketContent.removeChild(flowerImg);
        updateBasketStatus();
    }
    
    // klik
    flowerImages.forEach(function(img) {
        img.style.cursor = 'pointer';
        img.addEventListener('click', function() {
            addFlowerToBasket(img);
        });
    });
    
});