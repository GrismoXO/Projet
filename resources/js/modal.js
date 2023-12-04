let prices = document.querySelector('.prices');
let blur_price = document.querySelector('.blur_price');
let price = document.querySelector('#price');

prices.addEventListener('click', () => {
    price.style.display = "flex";
    blur_price.style.backgroundColor= "white";
    price.addEventListener('click', (e) => {
        if (e.target.tagName === 'BUTTON') {
            price.style.display = "none";
            blur_price.style.filter = "none";

        }
    });
})