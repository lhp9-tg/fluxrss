let imgArticle = document.querySelectorAll('.imgArticle');

console.log(imgArticle[0]);

let imgCarousel1 = document.querySelector('.imgCarousel1');
let imgCarousel2 = document.querySelector('.imgCarousel2');
let imgCarousel3 = document.querySelector('.imgCarousel3');

imgCarousel1.src = imgArticle[0].currentSrc;
imgCarousel2.src = imgArticle[1].currentSrc;
imgCarousel3.src = imgArticle[2].currentSrc;