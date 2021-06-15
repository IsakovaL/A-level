// console.log(Math.floor(Math.random() * 10) + 1)//random number
// ====================
// let my_mass = ['apple', 25, 'pear']
// let ran = Math.floor(Math.random() * 3)
//
// console.log(ran)
//
// console.log(my_mass[ran])
// ===========================

// let ocenca = 5
// console.log(ocenca > 2 ? 'passed' : 'didnt pass')
//console.log(ocenca > 2 ?? 'passed') - shows true or false
// ====================================

// console.log('Aaa' > 'Bbb')
// ========================

// console.log('02' > 1)
// console.log('01' == 1)
// console.log(true == 1)
// console.log(false == 0)
// ==============================
// console.log('' == false)
// console.log(NaN == false)
// console.log(null == undefined) //true
// console.log(null === undefined) //false
//
// console.log(null>0); //false(1)
// console.log(null == 0); // false(2)
// console.log(null>= 0 ) //true(3)
//
// console.log( 5 > 4) //true
// console.log('ананас' > 'яблоко') //false
// console.log("2" > "12") //true
// console.log(undefined == null)//true
// console.log(undefined === null) //false
// console.log(null == "0")//false
// console.log(null === "0")//false
//
// console.log(null == "0")//false
//
// let year = prompt("в каком году появилась спецификация ecmascript -2015?");
//
// if (year == 2015) {
//     alert('да вы знаток')
// } else {
//     alert('а вот и не правильно')
// }
//
//
// let year = prompt("в каком году появилась спецификация ecmascript -2015?");
//
// if (year < 2015) {
//     alert('too early')
// } else if (year > 2015) {
//     alert('too late')
// } else {
//     alert('correct')
// }
// ==================================
// let age = 38;
// let message = ""
// if (age < 3) {
//     message = 'hello baby!'
// } else if (age < 18 ) {
//     message = "hello!"
// } else if (age < 100) {
//     message = "good afternoon"
// } else {
//     message = "what a unique age"
// }
// console.log(message)
//
// let age = 38;
// let message = age < 3 ? "hello baby" :
//     age < 18 ? "hello" :
//         age < 100 ? "good afternoon" :
//             "what a unique age"
//
// console.log(message)
// ===================================

// let a =  2 + 2;
// switch (a) {
//     case 3: alert('маловато')
//         break;
//     case 4: alert('в точку')
//         break;
//     case 5: alert('перебор')
//         break;
//     default: alert('нет таких значений')
// }
//
// let age = 6;
// let message = "";
//
// switch (true) {
//     case (age < 3): message = "hi baby"
//         break;
//     case (age < 18): message = "hello"
//         break;
//     case (age < 100): message = "good afternoon"
//         break;
//     default: message = "what a unique age!"
// }

// let rand = Math.floor(Math.random() * 3) + 1
// const number = +prompt('enter number between 1 and 3')
//
// console.log(`${rand}`)
// if (number == rand) {
//     console.log("win")
// } else {
//     console.log("end")
// }

// let i = 0;
// while (i < 3) {
//     i++
//     console.log( i )
//     if (i === 2) {
//         break;
//     }
// }

// let i = 3
// while (i) {
//     alert(i)
//     i--
// }

// let i = 0
// do {
//     alert(i)
//     i++
// } while (i<3)
// console.log(i)



// let i = 0
// while (i<3) {
//    console.log(i)
//     i++
// }
// let i = 0
// for(; i<3; ) {
//     console.log(i)
//     i++
// }

// for (let i = 0; i < 3; i++) {
//    console.log(i)
// }
//=====================================
// let arr = ['ALex', 'Paul', 'Kate', 'Miya']
// let len = arr.length
// let i = 0
// let search = 'Kate'
// let res = 'not found'

// while(i < len) {
//
//     if (search === arr[i]) {
//         res = 'found'
//         break;
//     }
//     i++
// }
// console.log(res)
//
// for (let i=0; i < len; i++) {
//     if (search === arr[i]) {
//         res = 'found'
//         break
//     }
// }
// console.log(res)

//========================================
//
// let arr = ['ALex', 'Paul', 'Kate', 'Miya']
//
// let i = 0
// while(arr[i]){
//     i++
// }
// console.log(i)
// console.log(arr.forEach(value => console.log(value.toUpperCase())))
//
// for (let i = 0; i < 10; i++) {
//     if (i % 2 === 0) {
//         continue
//     }
//     alert(i)
// }


let arr = ['ALex', 'Paul', 'Kate', 'Miya']

for (val of arr) {
    console.log(val)
}

console.log("--------------------------------")


for (val in arr) {
    console.log(arr[val])
}


















