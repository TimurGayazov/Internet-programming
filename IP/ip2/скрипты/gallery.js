let img = ['image_1', 'image_2', 'image_3']; // массив в котором хранятся названия классов

let k = 0; // счетчик для определения позиции картинки

// функция для оброботки нажатия на кнопку вперед
document.getElementById('next').onclick = function(){
    document.getElementById('123').classList.add(img[k + 1]);
    k = k+1;
    if (k == img.length){
        for (let i = 0; i < img.length; i++) {
            document.getElementById('123').classList.remove(img[i]);
        }
        k = 0;
        document.getElementById('123').classList.add(img[k]);
    }
}

//функция для обработки нажатия на кнопку назад
document.getElementById('last').onclick = function(){
    if (k == 0){
        k = 2;
        document.getElementById('123').classList.add(img[k]);
    }
    else{
        document.getElementById('123').classList.remove(img[k]);
        document.getElementById('123').classList.add(img[k - 1]);
        k = k-1;
    }
}

