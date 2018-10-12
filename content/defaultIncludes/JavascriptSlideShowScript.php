<script>
// Open the Slideshow
function openSlideShow() {
  document.getElementById('pSlideShow').style.display = "block";
}

// Close the SlideShow
function closeSlideShow() {
  document.getElementById('pSlideShow').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function changeSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("eachSlides");
  var dots = document.getElementsByClassName("preview");
  var captionText = document.getElementById("caption_alt");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

// Handle ESC key (key code 27)
document.addEventListener('keyup', function(e) {
    if (e.keyCode == 27) {
        closeSlideShow();
    }
    if (e.keyCode == 39) {
        changeSlides(1);
    }
    if (e.keyCode == 37) {
        changeSlides(-1);
    }
});


</script>
