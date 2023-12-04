let btn_top = document.querySelector('.btn_top')

window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
      btn_top.style.display = 'block';  
    }
    else {
        btn_top.style.display = 'none';  
    }
    
})

btn_top.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
});