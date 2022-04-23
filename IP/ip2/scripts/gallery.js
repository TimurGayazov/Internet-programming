let offset = 0; //смещение от левого края
const sliderLine = document.querySelector('.slider-line');

k = document.getElementById('kolvo_img').getElementsByTagName('img').length;

document.querySelector('.next-btn').addEventListener('click', function(){
    offset = offset + 640;
    if (offset > 640*(k-1)) {
        offset = 0;
    }
    sliderLine.style.left = -offset + 'px';
});

document.querySelector('.last-btn').addEventListener('click', function(){
    offset = offset - 640;
    if (offset < 0) {
        offset = 640 * (k-1);
    }
    sliderLine.style.left = -offset + 'px';
});
