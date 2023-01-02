$('.exemples__slider').slick({
  infinite: true,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
});
$('.avis__slider').slick({
  dots: true
});
$('.modal__slider').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear'
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
let btn10 = document.querySelector('#b10');
let ht10 = document.querySelector('#h10');
let mbtns = document.querySelectorAll('.products__image')
// let mbtn2 = document.querySelector('#i2')
// let mbtn3 = document.querySelector('#i3')
// let mbtn4 = document.querySelector('#i4')
// let mbtn5 = document.querySelector('#i5')
// let mbtn6 = document.querySelector('#i6')
// let mbtn7 = document.querySelector('#i7')
// let mbtn8 = document.querySelector('#i8')
// let mbtn9 = document.querySelector('#i9')
// let mbtn10 = document.querySelector('#i10')
// let mbtn11 = document.querySelector('#i11')
// let mod1 = document.querySelector('#m1')
// let mod2 = document.querySelector('#m2')
// let mod3 = document.querySelector('#m3')
// let mod4 = document.querySelector('#m4')
// let mod5 = document.querySelector('#m5')
// let mod6 = document.querySelector('#m6')
// let mod7 = document.querySelector('#m7')
// let mod8 = document.querySelector('#m8')
// let mod9 = document.querySelector('#m9')
// let mod10 = document.querySelector('#m10')
// let mod11 = document.querySelector('#m11')
let escbtn = document.querySelectorAll('.modal__image')
let modal = document.querySelectorAll('.modal')

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
  btn6.classList.toggle('btn--active')
})
btn10.addEventListener('click', function () {
  ht10.classList.toggle('response__hiden-text--active')
  btn10.classList.toggle('btn--active')
})
productsBtn.addEventListener('click', function () {
    // productsList.classList.toggle('products__list--active');
    // productsList.style.display = (productsList.style.display === 'grid') ? 'none' : 'grid';
    productsList.classList.toggle('products__list--active');
    productsBtn.classList.add('products__btn--active');
  })
mbtns[0].addEventListener('click', function(){
  modal[0].classList.add('modal--active')
  console.log('пися')
} )
mbtns[1].addEventListener('click', function(){
  modal[1].classList.add('modal--active')
  console.log('пися')
} )
mbtns[2].addEventListener('click', function(){
  modal[2].classList.add('modal--active')
  console.log('пися')
} )
mbtns[3].addEventListener('click', function(){
  modal[3].classList.add('modal--active')
  console.log('пися')
} )
mbtns[4].addEventListener('click', function(){
  modal[4].classList.add('modal--active')
  console.log('пися')
} )
mbtns[5].addEventListener('click', function(){
  modal[5].classList.add('modal--active')
  console.log('пися')
} )
mbtns[6].addEventListener('click', function(){
  modal[6].classList.add('modal--active')
  console.log('пися')
} )
mbtns[7].addEventListener('click', function(){
  modal[7].classList.add('modal--active')
  console.log('пися')
} )
mbtns[8].addEventListener('click', function(){
  modal[8].classList.add('modal--active')
  console.log('пися')
} )
mbtns[9].addEventListener('click', function(){
  modal[9].classList.add('modal--active')
  console.log('пися')
} )
mbtns[10].addEventListener('click', function(){
  modal[10].classList.add('modal--active')
  console.log('пися')
} )

escbtn[0].addEventListener('click', function(){
  modal[0].classList.remove('modal--active')
} )
escbtn[1].addEventListener('click', function(){
  modal[1].classList.remove('modal--active')
} )
escbtn[2].addEventListener('click', function(){
  modal[2].classList.remove('modal--active')
} )
escbtn[3].addEventListener('click', function(){
  modal[3].classList.remove('modal--active')
} )
escbtn[4].addEventListener('click', function(){
  modal[4].classList.remove('modal--active')
} )
escbtn[5].addEventListener('click', function(){
  modal[5].classList.remove('modal--active')
} )
escbtn[6].addEventListener('click', function(){
  modal[6].classList.remove('modal--active')
} )
escbtn[7].addEventListener('click', function(){
  modal[7].classList.remove('modal--active')
} )
escbtn[8].addEventListener('click', function(){
  modal[8].classList.remove('modal--active')
} )
escbtn[9].addEventListener('click', function(){
  modal[9].classList.remove('modal--active')
} )
escbtn[10].addEventListener('click', function(){
  modal[10].classList.remove('modal--active')
} )

  // $('.price_tabs-content button').click(function() {
  //   const $this = $(this);
  //   const on = $this.siblings('p').toggleClass('on').hasClass('on');
  //   $this.text(on ? 'Закрыть' : $this.data('text'));
  // }).each((i, n) => $(n).data('text', $(n).text()));
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