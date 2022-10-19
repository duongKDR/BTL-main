let currentScrollPosition=0;
let scrollAmount = 1000;
const sCont = document.querySelector(".fl-sc");
const hsScroll = document.getElementById("horizontal");
let maxScroll = -sCont.offsetWidth + hsScroll.offsetWidth;
function scrollHorizontally(val){
    currentScrollPosition += (val + scrollAmount);
    if(currentScrollPosition >= 0){
        currentScrollPosition=0
    }
    if( currentScrollPosition < maxScroll){
        currentScrollPosition= maxScroll;
    }
    sCont.style.left=currentScrollPosition + "px";
}