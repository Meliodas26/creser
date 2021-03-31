var slideIndex;
var nSliders;

function startSlider(tmp, nSliders){
  slideIndex = tmp;
  nSliders = nSliders;
  showSlides(slideIndex)
}

// Next/previous controls
function plusSlides(n) {
  if(slideIndex != 0)
    showSlides(slideIndex += n);
  else
    showSlides(slideIndex = nSliders);
}

// Thumbnail image controls
function currentSlide(n) {
  console.log(n);
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "flex";
  dots[slideIndex-1].className += " active";
} 
