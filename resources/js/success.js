let success = document.querySelector('.popup');

    success.style.display = 'block';
    success.style.zIndex = '10';

    window.setTimeout(function () {
        success.style.display = 'none';
    }, 3000);