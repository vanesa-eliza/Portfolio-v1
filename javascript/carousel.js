let currentIndex = 0;
const carousel = document.querySelector(".carousel");
const figure = document.querySelectorAll(".carousel figure");
const imageNumbers = figure.length;

function scrollCarousel(){
    const offset = -currentIndex * 100;
    carousel.style.transform = `translateX(${offset}%)`;
}

document.querySelector('#next').addEventListener('click', function() {
    currentIndex = (currentIndex + 1) % imageNumbers;
    scrollCarousel();
});

document.querySelector('#prev').addEventListener('click', function(){
    currentIndex = (currentIndex-1 + imageNumbers) % imageNumbers;
    scrollCarousel();
});

scrollCarousel();
