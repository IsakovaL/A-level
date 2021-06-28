// let obj = {
//     name: 'Alex',
//     age: 30,
//     lan: ['en', 'ru']
// }
//
// console.log(typeof obj)

// let a = 4
// let b = 5
// console.log(a += b)

// console.log(0.2 + 0.4)
//
// let a = 2
// let b = 3
// console.log(a+++b)


// let ocenka = 2
// let res = ocenka > 2 ? 'passed exam' : 'didnt pass exam'
// console.log(res)

// let a = 10
// let b = a++
//
// console.log('a = ', a)
// console.log('b = ', b)

// console.log(`result is: ${1 + 2}`)

// let isGreater = 4 < 1
// console.log(isGreater)

// let age = null
// console.log(age)
//
// let x
// console.log(x)

// let firstName = "elena";
//
// const AGE = 38;
//
// let result = firstName + AGE;
//
// alert(result);
// alert(AGE + ` ` + firstName);
// alert (`${AGE} ${firstName}`);

// let age = prompt("how old are you?")
//
// alert(age);
//
// let user = "John";
// let age = 25;
// let message  = "Hello";
//
// console.log(`${user} ${age} ${message}`)
//
// let $ = 1
// let _ = 2
// console.log($ + _)






// jQuery.validator.setDefaults({
//     debug:true,
//     success: "valid"
// });
// $("#myform").validate({
//     rules:{
//         field: {
//             required: true,
//             email:true
//         }
//     },
//     messages: {
//         email: "please enter a valid e-mail address"
//     },
// });



function red() {
    $('h1').css('color', 'red')
    timeOutGreen()
}
function yellow() {
    $('h1').css('color', 'yellow')
    yellowToGreen()
}
function green() {
    $('h1').css('color', 'green')
}


function timeOutGreen() {
    setTimeout(yellow, 5000)
}

function yellowToGreen() {
    setTimeout(green, 1000)

}

//=======
$('.parent > .myClass').css("border", "3px solid red")
//==================



