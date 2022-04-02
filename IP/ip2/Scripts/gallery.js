let img = ['image_1', 'image_2', 'image_3'];

// let k = 0;

// document.getElementById('next').onclick = function(){
//     document.getElementById('123').classList.add(img[k + 1]);
//     document.getElementById('last').classList.remove('last-btn');
//     document.getElementById('last').classList.add('last-btn1');
//     k = k + 1;   
//     if(k == img.length){
//         for(let i = 1; i< img.length; i++){
//             document.getElementById('123').classList.remove(img[i]);
//         }
//         k = 0;
//         document.getElementById('123').classList.add(img[k]);
//     }
// }

// document.getElementById('last').onclick = function(){
//     document.getElementById('123').classList.remove(img[k]);
//     document.getElementById('123').classList.add(img[k - 1]);
//     if(k < 2){
//         k = img.length;
//         document.getElementById('123').classList.add(img[k]);
//     }
//     else{
//         k = k - 1;
//     }
// }

let k = 0;

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

