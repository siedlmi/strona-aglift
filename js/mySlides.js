// Slideshows
var slideIndex = 1;
var x = document.getElementsByClassName("mySlides");
   
function plusDivs(n) {
  slideIndex = slideIndex + n;
  showDivs(slideIndex);
}

function showDivs(n) {
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
 //x[slideIndex-1].style.display = "block";  
}

showDivs(0)
