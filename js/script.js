// $('.exemples__slider').slick({
//     dots: true
// });
let productsBtn = document.querySelector('.products__btn');
let productsList = document.querySelector('.products__list--hiden');

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