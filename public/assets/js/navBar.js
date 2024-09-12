let lastScrollTop = 0;
const element = document.getElementsByTagName("nav")[0];
console.log("Element:"+element);

window.addEventListener('scroll', () => {
    let currentScroll = window.scrollY || document.documentElement.scrollTop;
    if (currentScroll > lastScrollTop) { 
        element.style.transform = 'translateY(-200%)'; // Hide element
    } else {
        element.style.transform = 'translateY(0)'; // Show element
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
});