let confirm_button = document.getElementById('conf');
let data = document.getElementById('data');

let msg = "";
mas = [[], []];



function Valid(){
    // console.clear();
    let array;
    let str;
    if(data.value.length > 0){
        array = new Array();
        str = data.value.split("\n");
        for (let i = 0; i < str.length; i++) {
            if (str[i].length > 0) {
                array[i] = str[i].split(' ');
            }

            
        }
        for(let i = 0; i < array.length; i++) {
            if (array[i].length != 2) {
                msg = "В каждой строке должно находится ровно 2 элемента!!!";
                alert(msg);
            }
        
    }
        console.log(array);

    }
    else{
        msg = "Поле не должно быть пустым!!!"
        alert(msg);
    }
    return array;

}