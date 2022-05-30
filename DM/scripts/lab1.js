var error = "";


// Валидация данных
function Valid(mes) {
    // console.clear();
    if (mes.length > 0) {
        mass = mes.split(" ");
        console.log(mass);//Проверка
        for (let i = 0; i < mass.length; i++){
            if (mass[i].length != 4) {
                error = 'Размер элемента должен быть равен 4 символам!';
                return false;
            }
            if (mass[i][0] < "A" || mass[i][0] > "z") {
                error = 'Первый элемент должен быть буквой!';
                return false;
            }
            if (mass[i][1] % 2 == 0) {
                error = 'Второй элемент должен быть нечетной цифрой!';
                return false;
            }
            if (mass[i][2] < "A" || mass[i][2] > "z") {
                error = 'Третий элемент должен быть буквой!';
                return false;
            }
            if (mass[i][3] % 2 != 0) {
                error = 'Четвертый элемент должен быть четной цифрой!';
                return false;
            }
        }
    }
    else {
        
    }
        return mass;
}

// Главная функция, выполняющие операции над множествами
function Operations() {
    console.clear();
    var mas_1 = document.getElementById('first_mas');
    var mas_2 = document.getElementById('second_mas');
    if (Valid(mas_1.value) && Valid(mas_2.value)) { // Начало функции если данные соответсвуют требованиям
        const mas_1_set = new Set(mas_1.value.split(" "));
        const mas_2_set = new Set(mas_2.value.split(" ")); // создание двух множеств
        console.log(mas_1_set);//Проверка
        console.log(mas_2_set);//Проверка
        let unification = [...new Set([...mas_1_set, ...mas_2_set])]; // объеденение двух множеств
        console.log(unification);//Проверка
        let intersection = (mas_1.value.split(" ")).filter(x => (mas_2.value.split(" ")).includes(x)); // Пересечение
        let difference_one = (mas_1.value.split(" ")).filter(x => !mas_2.value.split(" ").includes(x)); // A\B
        let difference_two= (mas_2.value.split(" ")).filter(x => !mas_1.value.split(" ").includes(x)); // B\A
        let symmetric_difference = mas_1.value.split(" ").filter(x => !mas_2.value.split(" ").includes(x)).concat(mas_2.value.split(" ").filter(x => !mas_1.value.split(" ").includes(x))); // Симметрическая разность


        // Вывод данных на страницу
        console.log(...unification.values());//Проверка
        document.getElementById('unification').innerHTML = [...unification.values()];
        document.getElementById('intersection').innerHTML = [...intersection.values()];
        document.getElementById('difference_AB').innerHTML = [...difference_one.values()];
        document.getElementById('difference_BA').innerHTML = [...difference_two.values()];
        document.getElementById('symmetric_difference').innerHTML = [...symmetric_difference.values()];
        // console.clear();
    }  
    // Вывод ошибок если данные не прошли валидацию
    else {
        alert(error);
    }
}