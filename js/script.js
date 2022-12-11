$('.exemples__slider').slick({
    dots: false
});
let productsBtn = document.querySelector('.products__btn');
let productsList = document.querySelector('.products__list--hiden');
let btn = document.querySelector('#b1');
let ht = document.querySelector('#h1');
let btn2 = document.querySelector('#b2');
let ht2 = document.querySelector('#h2');
let btn3 = document.querySelector('#b3');
let ht3 = document.querySelector('#h3');
let btn4 = document.querySelector('#b4');
let ht4 = document.querySelector('#h4');
let btn5 = document.querySelector('#b5');
let ht5 = document.querySelector('#h5');
let btn6 = document.querySelector('#b6');
let ht6 = document.querySelector('#h6');


btn.addEventListener('click', function () {
  ht.classList.toggle('response__hiden-text--active')
  btn.classList.toggle('btn--active')
})
btn2.addEventListener('click', function () {
  ht2.classList.toggle('response__hiden-text--active')
  btn2.classList.toggle('btn--active')
})
btn3.addEventListener('click', function () {
  ht3.classList.toggle('response__hiden-text--active')
  btn3.classList.toggle('btn--active')
})
btn4.addEventListener('click', function () {
  ht4.classList.toggle('response__hiden-text--active')
  btn4.classList.toggle('btn--active')
})
btn5.addEventListener('click', function () {
  ht5.classList.toggle('response__hiden-text--active')
  btn5.classList.toggle('btn--active')
})
btn6.addEventListener('click', function () {
  ht6.classList.toggle('response__hiden-text--active')
  btn6  .classList.toggle('btn--active')
})
productsBtn.addEventListener('click', function () {
    // productsList.classList.toggle('products__list--active');
    // productsList.style.display = (productsList.style.display === 'grid') ? 'none' : 'grid';
    productsBtn.classList.toggle('products__btn--active');
    productsList.classList.toggle('products__list--active');
  })
  $('.price_tabs-content button').click(function() {
    const $this = $(this);
    const on = $this.siblings('p').toggleClass('on').hasClass('on');
    $this.text(on ? 'Закрыть' : $this.data('text'));
  }).each((i, n) => $(n).data('text', $(n).text()));
//   $(document).ready(function() { 
//     $(".products__btn").toggle(function() { 
//       // Отображаем скрытый блок 
//       $(".products__list--hiden").fadeIn(); // fadeIn - плавное появлени
//       return false; // не производить переход по ссылке
//     },  
//     function() { 
//       // Скрываем блок 
//       $(".products__list--hiden").fadeOut(); // fadeOut - плавное исчезновение 
//       return false; // не производить переход по ссылке
//     }); // end of toggle() 
//   }); // end of ready() 
// $(document).ready(function() { 
//     $("A#trigger").toggle(function() { 
//       // Отображаем скрытый блок 
//       $("DIV#box").fadeIn(); // fadeIn - плавное появлени
//       return false; // не производить переход по ссылке
//     },  
//     function() { 
//       // Скрываем блок 
//       $("DIV#box").fadeOut(); // fadeOut - плавное исчезновение 
//       return false; // не производить переход по ссылке
//     }); // end of toggle() 
//   }); // end of ready() 