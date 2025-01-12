let slider = document.querySelector('.slider');
let slides = document.querySelectorAll('.slide');
let index = 0;

function showNextSlide() {
  index = (index + 1) % slides.length;
  slider.style.transform = `translateX(-${index * 100}%)`;
}

setInterval(showNextSlide, 3000); // هر 3 ثانیه تغییر می‌کند

let currentSlide = 0;

document.querySelector('.left-btn').addEventListener('click', () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    document.querySelector('.exhibition-slider').style.transform = `translateX(-${currentSlide * 100}%)`;
});

document.querySelector('.right-btn').addEventListener('click', () => {
    currentSlide = (currentSlide + 1) % slides.length;
    document.querySelector('.exhibition-slider').style.transform = `translateX(-${currentSlide * 100}%)`;
});
