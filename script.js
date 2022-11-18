var loading = document.getElementById('loading_div')
var profile_overflow = document.getElementById('profile_overflow')
var sliderID = document.getElementById('sliderID')
var capsule = document.getElementById('capsule')
var firstpopup = document.getElementById('firstpopup')


window.onload = function () {
    document.getElementById("loading_div").style.display = "block";
};



function sliderToggle() {

    sliderID.style.display = 'none'
    firstpopup.style.display = 'none'
    profile_overflow.style.display = 'none'

    capsule.style.display = 'block'

    console.log('button');

}



function closeAll() {

    firstpopup.style.display = 'none'
    profile_overflow.style.display = 'none'
    sliderID.style.display = 'none'

    capsule.style.display = 'block'

    console.log('vdieo');

}

function capsuleClick() {
    capsule.style.display = 'none'
    sliderID.style.display = 'flex'
    firstpopup.style.display = 'flex'
    profile_overflow.style.display = 'flex'


}

document.addEventListener('DOMContentLoaded', () => {
    // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
    const player = new Plyr('#player');

    // Expose
    window.player = player;

});


// option1
var video = document.getElementById('video');
var option1 = document.getElementById('option1');

option1.addEventListener('click', () => {
    video.style.display = 'block'
})

function iframePopUp() {
    video.style.display = 'none'
}

// option 2

var htmpage = document.getElementById('htmlpage');
var option2 = document.getElementById('option2');

option2.addEventListener('click', () => {
    htmpage.style.display = 'block'
})


function htmlPagePreview() {
    htmpage.style.display = 'none'
}



// option 3
var page = document.getElementById('page');
var option3 = document.getElementById('option3');

option3.addEventListener('click', () => {
    page.style.display = 'block'
})


function webPagePreview() {
    page.style.display = 'none'
}

var container = document.getElementById('container')
var sliderProduct = document.getElementById('slider');
var slides = document.getElementsByClassName('slide').length;
var buttons = document.getElementsByClassName('btn');



// footer slider

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

}

var player= document.getElementById('player')
var profilePly = document.getElementById('profilePly')
profilePly.addEventListener('click',()=>{
    player.play()
})



// slider card



const nextSlide = (event) => {
    const slider = event.parentNode.children[1]
    slider.append(slider.children[0])
  }
  const prevSlide = (event) => {
    const slider = event.parentNode.children[1]
    slider.prepend(slider.children[slider.children.length - 1])
  }


var change_Class= document.getElementsByClassName('change_class')
var initial_Class= document.getElementsByClassName('initial_class')

console.log(change_Class.length)
console.log(initial_Class.length)

var change=true

function imgchange(){
    if(change){
        
            for(let i= 0; i<change_Class.length; i++){
        
                initial_Class[i].style.display = 'none'
                change_Class[i].style.display = 'block'
            }
    change=false
    }else{
            for(let i= 0; i<change_Class.length; i++){
        
                change_Class[i].style.display = 'none'
                initial_Class[i].style.display = 'block'
            }
        change=true
    }
}



    $('.sidebutton').click(function () {
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });
    $('.feat-btn').click(function () {
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });
    $('.serv-btn').click(function () {
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
    });
    $('nav ul li').click(function () {
        $(this).addClass("active").siblings().removeClass("active");
    });

