// const words = [
//     'spray', 'limit', 'elite', 'exuberant', 'destruction', 'present'];
//
// // const result = words.filter(word => word.length > 6);
// // console.log(result);
// // console.log('filter => ', result)
// //
// // const result2 = words.map(word => word.toUpperCase())
// // console.log(result2)
// // console.log('map => ', result2)
//
// function test (arr,rule) {
//     let res = []
//     for (let i = 0; i < arr.length; i++) {
//         res.push(rule(arr[i]))
//     }
//     return res
// }
//
// console.log(123)
// let myMap = test(words, word => {
//     let res = ''
//     if(word.length > 6) {
//         console.log(1)
//         res = word.toUpperCase()
//     } else {
//         console.log(2)
//
//         res = word
//     }
//     return word
// })
//
// console.log(myMap)
// const words = [
//     'spray', 'limit', 'elite', 'exuberant',
//     'destruction', 'present'];
// function test(arr, rule) {
//     let res = []
//     for (let i = 0; i < arr.length; i++){
//         res.push(rule(arr[i]))
//     }
//     return res
// }
// let myMap = test(words, word => {
//     let res = ''
//     if (word.length > 6) {
//         res = word.toUpperCase()
//     } else {
//         res = word
//     }
//     return res
// })
// console.log(myMap)


//
// async function f() {
//     let promise = new Promise((resolve, reject) => {
//         setTimeout(() => resolve("ready"), 1000)
//     });
//     let result = await promise;
//     alert(result);
// }
// f();
//
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)
// console.log(222222222222222222)


// async function f1() {
//     let i
//     for (i = 0; i < 20; i++) {
//
//     }
//     return Promise.resolve(i);
// }
//
// async function f2() {
//     return Promise.resolve(222);
// }
//
//
// console.log(f1())
//
// f2().then(alert)
// f1().then(alert)


class FirstClass {
    message(stringText) {
        return stringText.toUpperCase()
    }
    shortName(firstName, lastName, secondName) {
        let newFirstNAme = firstName[0].toUpperCase()+firstName.slice(1)
        return `${newFirstNAme} ${lastName[0].toUpperCase()} ${secondName[0].toUpperCase()}`
    }
}

const firstClass = new FirstClass
console.log(firstClass.message('asdsa'))
console.log(firstClass.shortName(
    'isakova',
    'elena',
    'viktorovna'))


class Cart {
    addToCart(id, count) {
        let obj = {
            id: id,
            count: count
        }
        const myJSON = JSON.stringify(obj)
        let cart = localStorage.getItem('cart')
        let res  = []
        if(cart) {
            res.push(cart)
        }

        localStorage.setItem('cart', myJSON)
    }
    increment() {
        (localStorage.setItem('cart')).parse(test)
    }
    decrement() {

    }
    remove() {
        localStorage.setItem('myCat')
    }
}
const cart = new Cart()
function myClick(id,name) {
    console.log(id, name)
    cart.addToCart(id, 1)
}




