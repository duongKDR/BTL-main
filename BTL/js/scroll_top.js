 window.onscroll = function() {scrollFunction()};
function scrollFunction() {
     if (document.documentElement.scrollTop > 500) {
         document.getElementById("myBtn").style.display = "block";
     } else {
         document.getElementById("myBtn").style.display = "none";
     }
 }
 document.getElementById('myBtn').addEventListener("click", function(){
     document.documentElement.scrollTop = 0;
 });