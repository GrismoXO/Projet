let nav_home = document.querySelector(".nav_home");

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        nav_home.style.background = "#ffffff";
        nav_home.style.borderBottom = "solid 1px";
        nav_home.style.transition = "background 0.3s ease";
        nav_home.style.color = "black";  
    }
    else {
        nav_home.style.background = "transparent";
        nav_home.style.borderBottom = "none";
        nav_home.style.color = "#f6ebe7";  
    }
})

nav_home.addEventListener('mouseenter', () => {
    nav_home.style.background = "#ffffff";
    nav_home.style.borderBottom = "solid 1px"; 
    nav_home.style.transition = "background 0.3s ease";
    nav_home.style.color = "black";   
}); 

nav_home.addEventListener('mouseleave', () => {
    if (window.scrollY <= 50) {
        nav_home.style.background = "transparent";
        nav_home.style.borderBottom = "none"; 
        nav_home.style.color = "#ffffff"; 
    }
});