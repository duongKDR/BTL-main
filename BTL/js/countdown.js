var counter = 3;
let set1=setInterval(function(){
  console.log('jkjj')
  counter--;
  coundown=document.getElementById("countdown");
  if(counter >=0){
    coundown.innerHTML=counter;
  }
  if(counter===0){
    clearInterval(set1);
    coundown.style.display="none";
    change=document.querySelectorAll(".sell");
    change.forEach(element => {
      element.style.backgroundColor="red";
    });
  }
},1000)
// function cancel(){
//   end=document.getElementById("end");
//   end.style.display = "none";

