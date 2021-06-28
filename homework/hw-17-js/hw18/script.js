// 1. Дано два числа 42 и 55 определите при помощи тернарной операции какое число больше.

let num1 = 42
let num2 = 55

let res = num1 > num2 ? `${num1} > ${num2}`: `${num1} < ${num2}`
console.log(res)

//     • Используй в место статических чисел функцию rand(); Пример я ограничил набор случайных чисел от 5 до 15
//     rand(5, 15);
//     • Определи минимальное и максимальное число



// 2. Сокращение Имени и Отчества. Возьмите за основу свою ФИО. У вас будет 3 переменные. (Ф.И.О.)
// Ваша программа должна сократить Имя и Отчество. вот пример:
//     (Иванов Иван Иванович) => (Иванов И. И.)

let f = 'Isakova';
let i = 'Elena';
let o = 'Viktorovna';

let newI = i[0] + ".";
let newO = o[0] + ".";

console.log(`${f} ${newI} ${newO}`);


//
// 3. Даны 4-ри разных числа (a=12 b=14 c=10 d=-12) Программа должна быть универсальной, и должна подходить для масштабирования.
// Задачей алгоритма определить какой число минимальное какое максимальное. НЕЛЬЗЯ ИСПОЛЬЗОВАТЬ ГОТОВЫЕ ФУНКЦИИ!!!
//     - Дано 6-разных чисел (придумай сам)
//
// 4. Даны три стороны треугольника. Алгоритм должен определить и вывести сообщение какой это треугольник.

let ab = 10
let bc = 6
let ac = 10

if (ab === bc && ab === ac) {
    console.log('Это равносторонний треугольник')
} else {
    console.log('Это не равносторонний треугольник')
}

// 5. Известны 4 стороны. Программа должна выводить прямоугольник или квадрат.
// Также продумать исключения является ли это вообще фигурой.

let a = 4;
let b = 6;
let c = 4;
let d = 5;

if(a == b) {
    alert("eto kvadrat")
}
if (a == c && b == d && a != b) {
    alert ("eto priamougolnik");
} else {
    alert ("nepravilnaya figura")
}

// 6. Вам нужно разработать программу, которая считала бы количество вхождений какой-нибудь выбранной вами цифры в выбранном вами числе.
// Например: цифра 7 в числе 123456789 встречается 1 раза (ограничите себя функцией rand(1, 99999) – это ваше случайное число) используй функцию substr_count()
//
// 7. В переменной month лежит какое-то число из интервала от 1 до 12.
// Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
//
// 8. Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'.
// Если это так - выведите 'да', в противном случае выведите 'нет'.
//
// 9. Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
// Если это так - выведите 'да', в противном случае выведите 'нет'.

let str = '12345';
let checkStr = str[0] == "1" || str[0] == "2" || str[0] == "3"? 'да' : 'нет';
console.log(checkStr);

//
// 10. Если переменная test равна true, то выведите 'Верно', иначе выведите 'Неверно'. П
// роверьте работу скрипта при test, равном true, false. Напишите два варианта скрипта - тернарка и if else.
//
// 11. Дано Два массива рус и англ ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']
//
// 12. Если переменная lang = ru вывести массив на русском языке, а если en то вывести на английском языке.
// Сделат через if else и через тернарку.
//
// 13. В переменной cloсk лежит число от 0 до 59 – это минуты. Определите в какую четверть часа попадает это число
// (в первую, вторую, третью или четвертую). тернарка и if else.

// -----------------PART 2
//     document.body.style.background = "#ccc" воспользуйся
//
// Создай переменную цвет для боди. Константа.
//     Измени цвет всего сайта при помощи этой константы.

const bodyColor = "#f5f5f5";
document.body.style.background = bodyColor;

// -------------------------
//     Создай массив цветов (минимум 5 разных цветов)
// используя один из цветов передавай его в беграунд боди, что бы изменить цвет всей страницы.

let colors = ['#cccc', '#f5f5f5', '#eee55e', '#d4d', '#f8f8'];
document.body.style.background = colors[2];

// -------------------------
//
//     let res = `${person.firstName} </br> ${person.lastName} `
//
// Создай объект персона. Опиши его свойствами (имя/фамилия/никнейм/фото/возраст/пол/емейл/)
// Выведи все его свойства в верстку.

let person = {
    name: 'Vasya',
    lastname: 'Ivanov',
    nickname: 'vasya111',
    photo: 'lala',
    age: 24,
    gender: 'male',
    email: 'vasya@gmail.com'
};
let description = `${person.name} <br> ${person.lastname} <br> ${person.nickname} <br> ${person.photo} <br> ${person.age} <br> ${person.gender} <br> ${person.email}`;
let div = document.getElementsByClassName("person")[0];
div.innerHTML = description;

// ------------------------------
//     Создай переменную объект машина опиши минимум 15 свойств.

let car = {
    name: 'BMW',
    model: '520',
    year: '2004',
    color: `red`
}
let carDescr = `${car.name} <br> ${car.model} <br> ${car.year} <br> ${car.color}`;

let div = document.getElementsByClassName("car")[0];
div.innerHTML = carDescr;

//     Создай переменную объект дом, опиши 15 свойств.
//     Выведи эти объекты в верстку.

let house = {
    floors: '5 floors',
    size: '150 m2',
    rooms: '8 rooms'
}
let houseDescr = `${house.floors} <br> ${house.size} <br> ${house.rooms}`;
let div = document.getElementsByClassName("house")[0];
div.innerHTML = houseDescr;
//--------------------------------------------

// part 3
//
// Все задания делаем
// -while
//     -do while
//         -for
//             -for in
//                 -for of
//
//
//                 1. Дан массив
//     ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
// Развернуть этот массив в обратном направлении
//
let arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
let newArr = []

for(let i=arr.length -1; i >= 0; i--) {
    newArr.push(arr[i])
}
console.log(newArr);


let arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
let i = arr.length - 1;
let newArr = []

while (i >= 0) {
    newArr.push(arr[i])
    i--;
}
console.log(newArr);

let arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
let i = arr.length - 1;
let newArr = []

do {
    newArr.push(arr[i])
    i--;
}  while (i >= 0)

// 2. Дан массив
//     [44, 12, 11, 7, 1, 99, 43, 5, 69]
// Развернуть этот массив в обратном направлении
//
let arr = [44, 12, 11, 7, 1, 99, 43, 5, 69]
let newArr = []

for(let i=arr.length -1; i >= 0; i--) {
    newArr.push(arr[i])
}
console.log(newArr);
//
// 3. Дана строка
// let str = 'Hi I am ALex'
// развенуть строку в обратном направлении.

let str = 'Hi I am ALex'


// let str = 'Hi I am ALex'
// let rev = str.split('').reverse().join('')
//
// console.log(rev)

// 4. Дана строка
// let str = 'Hi I am ALex'
// сделать ее с с маленьких букв
//
let str = 'Hi I am ALex'

// console.log(str.toLowerCase())

// 5. Дана строка
// let str = 'Hi I am ALex'
// сделать все буквы большие
let str = 'Hi I am ALex'

// console.log(str.toUpperCase())


//
// 6. Дана строка
// let str = 'Hi I am ALex'
// развернуть ее в обратном направлении

let str = 'Hi I am ALex'
let res = ''
for (let i = str.length - 1; i >= 0; i--) {
    res += str[i]
}
console.log(res)

// let str = 'Hi I am ALex'
// let rev = str.split('').reverse().join('')
//
// console.log(rev)
//
// 7. Дан массив
// сделать все буквы с маленькой

let arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
let arr1 = []
let i = 0
while(arr[i]){
    arr1.push(arr[i].toLowerrCase())
    i++

}
console.log(arr1)
//
// 8. Дан массив
// сделать все буквы с большой
let arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya']
let arr1 = []
let i = 0
while(arr[i]){
    arr1.push(arr[i].toUpperCase())
    i++

}
console.log(arr1)
//
// 9. Дано число
// let num = 1234678
// развернуть ее в обратном направлении

let n = 1234678 + '';
let res = n[n.length -1];
for(let i = n.length - 2; i >= 0; i--)
    res += n[i];
alert(res);

// 10. Дан масси
//     [44, 12, 11, 7, 1, 99, 43, 5, 69]
// отсортеруй его в порядке убывания

let arr = [44, 12, 11, 7, 1, 99, 43, 5, 69]
let len = arr.length
for (let j = len - 1; j > 0; j--) {
    for (let i = 0; i < j; i++) {
        if (arr[i] < arr[i + 1]) {
            let res = arr[i]
            arr[i] = arr[i + 1]
            arr[i + 1] = res
        }
    }
}
console.log(arr)
//
// не используй готовые функции
