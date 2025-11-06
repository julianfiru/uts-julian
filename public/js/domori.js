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
    
    // Event: Change Text Color Button
    changeTextBtn.addEventListener('click', function() {
        currentAction = 'text';
        popupTitle.textContent = 'Change Text Color';
        popupText.textContent = 'Choose your text color:';
        colorPicker.value = '#000000';
        popupOverlay.style.display = 'block';
    });
    
    // Event: Change Background Color Button
    changeBgBtn.addEventListener('click', function() {
        currentAction = 'background';
        popupTitle.textContent = 'Change Background Color';
        popupText.textContent = 'Choose your background color:';
        colorPicker.value = '#ffffff';
        popupOverlay.style.display = 'block';
    });
    
    // Event: Apply Color Button
    applyColorBtn.addEventListener('click', function() {
        const selectedColor = colorPicker.value;
        
       if (currentAction === 'text') {
            text1.style.color = selectedColor;
            h1Title.style.color = selectedColor;
            basketStat.style.color = selectedColor; // 🟢 Tambahkan baris ini
            console.log('Text color changed to:', selectedColor);
        }
        else if (currentAction === 'background') {
            body.style.backgroundColor = selectedColor;
            console.log('Background color changed to:', selectedColor);
        }
        
        popupOverlay.style.display = 'none';
    });
    
    // Event: Close Popup Button
    closePopupBtn.addEventListener('click', function() {
        popupOverlay.style.display = 'none';
    });
    
    // Event: Click outside popup to close
    popupOverlay.addEventListener('click', function(e) {
        if (e.target === popupOverlay) {
            popupOverlay.style.display = 'none';
        }
    });
    
    // Function: Update Basket Status
    function updateBasketStatus() {
        basketStat.textContent = 'The flower basket currently contains ' + flowerCount + ' flower' + (flowerCount !== 1 ? 's' : '') + '.';
    }
    
    // Function: Add Flower to Basket
    function addFlowerToBasket(originalImg) {
        flowerCount++;
        
        const flowerCopy = document.createElement('img');
        flowerCopy.src = originalImg.src;
        flowerCopy.alt = originalImg.alt;
        flowerCopy.width = 100;
        flowerCopy.height = 100;
        flowerCopy.style.cursor = 'pointer';
        flowerCopy.style.margin = '5px';
        flowerCopy.style.border = '2px solid #333';
        
        flowerCopy.addEventListener('click', function() {
            removeFlowerFromBasket(flowerCopy);
        });
        
        basketContent.appendChild(flowerCopy);
        updateBasketStatus();
    }
    
    // Function: Remove Flower from Basket
    function removeFlowerFromBasket(flowerImg) {
        flowerCount--;
        basketContent.removeChild(flowerImg);
        updateBasketStatus();
    }
    
    // Event: Click on Flower Images
    flowerImages.forEach(function(img) {
        img.style.cursor = 'pointer';
        img.addEventListener('click', function() {
            addFlowerToBasket(img);
        });
    });
    
});