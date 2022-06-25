let PlusBtn = document.querySelector('#Plus');
let MinusBtn = document.querySelector('#Minus');
let input = document.querySelector('#Quantity');


PlusBtn.addEventListener('click', () =>{
    input.value = parseInt(input.value) + 1;

});

MinusBtn.addEventListener('click', () => {
    input.value = parseInt(input.value) - 1;

});