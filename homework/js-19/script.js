//s = 0.5 * base * height
function triangleArea(base, height) {
    return 0.5 * base * height
}

triangleArea(10, 5)

//Теорема Пифагора a2 + b2 = c2

function pifagorTh(a, b) {
    return (a * a) + (b * b)
}

pifagorTh(2, 4)

//Найти дискриминант
function desr(a, b, c) {
    let D = (b * b) - (4 * a * c)

    if (D > 0) {

        console.log("2 корня")
    }
    if (D < 0) {
        console.log("корней нет.")
    }
    if (D = 0) {
        console.log("1 корень")
    }
}

desr(2, 3, 4)

//Создать только четные числа до 100

function even() {
    let res =[]
    for (let i = 0; i <= 100; i++) {
        if (i % 2 == 0) {
            res.push(i)
            console.log(i)
        }
    }
}
even()

// Создать не четные числа до 100
function even() {
    let res =[]
    for (let i = 0; i <= 100; i++) {
        if (i % 2 != 0) {
            res.push(i)
            console.log(i)
        }
    }
}
even()

// Создать функцию по нахождению числа в степени

function pow(a, n) {
    let b = a

    for (let i = 1; i < n; i++) {
        b *= a
    }

    return b
}
 pow(2, 5)

// написать функцию сортировки. Функция принимает массив случайных чисел и сортирует их по порядку. По дефолту функция сортирует в порядке возростания.
// Но если передать всторой параметр то функция будет сортировать впо убыванию.
let arr = [14,7,33,90,8,26,72,76,2,1,18]
function sort(arr, ascDesc) {
    let len_arr = arr.length
    if (ascDesc === 'asc' || !ascDesc) {
        for (let j = len_arr - 1; j > 0; j--) {
            for (let i = 0; i < j; i++) {
                if (arr[i] > arr[i + 1]) {
                    let temp = arr[i]
                    arr[i] = arr[i + 1]
                    arr[i + 1] = temp
                }
            }
        }
        return arr
    } else if(ascDesc === 'desc') {
        for (let j = len_arr - 1; j > 0; j--) {
            for (let i = 0; i < j; i++) {
                if (arr[i] < arr[i + 1]) {
                    let temp = arr[i]
                    arr[i] = arr[i + 1]
                    arr[i + 1] = temp
                }
            }
        }
        return arr
    }
}
console.log(sort(arr, 'desc'))

// написать функцию поиска в массиве. функция будет принимать два параметра. Первый массив, второй посковое число. search(arr, find)

let arr = [2,45,67,67,3,5,88,75,5]
function search(arr, find) {
    let num = 0
    for(let i = 0; i < arr.length; i++) {
        if (find === arr[i]) {
            num++
        }

    }
    return `Количество совпадений : ${num}`
}

console.log(search(arr, 5))