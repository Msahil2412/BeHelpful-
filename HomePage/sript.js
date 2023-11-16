function sidebar()
{
let x=document.getElementById('navi')
if(x.className==="icon")
    x.className+="res";
else
    x.className="icon"
}

function avatar()
{
    let x=document.getElementById('avatar')
    if(x.className === 'container')
    {    x.className="open "+x.className;
        console.log(x.className)
    }
    else
        x.className='container'
}

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
}