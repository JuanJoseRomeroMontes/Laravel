const hamburguerButton = document.getElementById("navHamburgerButton");
const hamburguerMenu = document.getElementById("navHamburguerMenu");
let menuOpen = false;

hamburguerButton.addEventListener("click", ToggleHamburguerMenu)

function ToggleHamburguerMenu(){
    hamburguerMenu.classList.toggle("display-true");
    
    menuOpen = !menuOpen;
    if(menuOpen)
        hamburguerButton.setAttribute('src','Images/X.svg');
    else
        hamburguerButton.setAttribute('src','Images/Hamburguer.svg');
    
}