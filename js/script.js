$('.exemples__slider').slick({
  infinite: true,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
});
$('.avis__slider').slick({
  dots: true
});
$(document).ready(function() {
  $('.modal__slider').slick({
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  // fade: true,
  swipe: true
});
})
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
let texts = document.querySelectorAll('.reponses__item')
let escbtn = document.querySelectorAll('.modal__image')
let modal = document.querySelectorAll('.modal')
let image = modal[0].querySelectorAll('.hiden-script')
let sl = modal[0].querySelector('.modal__slider')
let pBtn = document.querySelectorAll('.productd__button')
let еееtr = document.querySelectorAll('.menu-item')
let heeader = document.querySelector('.header');


еееtr[0].addEventListener('click', function(){
  heeader.classList.remove('menu-opened')
} )
еееtr[1].addEventListener('click', function(){
  heeader.classList.remove('menu-opened')
} )
еееtr[2].addEventListener('click', function(){
  heeader.classList.remove('menu-opened')
} )
еееtr[3].addEventListener('click', function(){
  heeader.classList.remove('menu-opened')
} )
еееtr[4].addEventListener('click', function(){
  heeader.classList.remove('menu-opened')
} )
еееtr[5].addEventListener('click', function(){
  heeader.classList.remove('menu-opened')
} )

productsBtn.addEventListener('click', function () {
    productsList.classList.toggle('products__list--active');
    productsBtn.classList.add('products__btn--active');
  })
mbtns[0].addEventListener('click', function(){
  modal[0].classList.add('modal--active')
} )
pBtn[0].addEventListener('click', function(){
  modal[0].classList.add('modal--active')
} )
pBtn[1].addEventListener('click', function(){
  modal[1].classList.add('modal--active')
} )
pBtn[2].addEventListener('click', function(){
  modal[2].classList.add('modal--active')
} )
pBtn[3].addEventListener('click', function(){
  modal[3].classList.add('modal--active')
} )
pBtn[4].addEventListener('click', function(){
  modal[4].classList.add('modal--active')
} )
pBtn[5].addEventListener('click', function(){
  modal[6].classList.add('modal--active')
} )
pBtn[6].addEventListener('click', function(){
  modal[6].classList.add('modal--active')
} )
pBtn[7].addEventListener('click', function(){
  modal[7].classList.add('modal--active')
} )
pBtn[8].addEventListener('click', function(){
  modal[8].classList.add('modal--active')
} )
pBtn[9].addEventListener('click', function(){
  modal[9].classList.add('modal--active')
} )
pBtn[10].addEventListener('click', function(){
  modal[10].classList.add('modal--active')
} )


mbtns[1].addEventListener('click', function(){
  modal[1].classList.add('modal--active')

} )
mbtns[2].addEventListener('click', function(){
  modal[2].classList.add('modal--active')

} )
mbtns[3].addEventListener('click', function(){
  modal[3].classList.add('modal--active')

} )
mbtns[4].addEventListener('click', function(){
  modal[4].classList.add('modal--active')

} )
mbtns[5].addEventListener('click', function(){
  modal[5].classList.add('modal--active')

} )
mbtns[6].addEventListener('click', function(){
  modal[6].classList.add('modal--active')

} )
mbtns[7].addEventListener('click', function(){
  modal[7].classList.add('modal--active')

} )
mbtns[8].addEventListener('click', function(){
  modal[8].classList.add('modal--active')
} )
mbtns[9].addEventListener('click', function(){
  modal[9].classList.add('modal--active')
} )
mbtns[10].addEventListener('click', function(){
  modal[10].classList.add('modal--active')
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
texts[0].addEventListener('click', function(){
  ht10.classList.toggle('response__hiden-text--active')
  btn10.classList.toggle('btn--active')
})
texts[1].addEventListener('click', function(){
  ht2.classList.toggle('response__hiden-text--active')
  btn2.classList.toggle('btn--active')
})
texts[2].addEventListener('click', function(){
  ht3.classList.toggle('response__hiden-text--active')
  btn3.classList.toggle('btn--active')
})
texts[3].addEventListener('click', function(){
  ht4.classList.toggle('response__hiden-text--active')
  btn4.classList.toggle('btn--active')
})
texts[4].addEventListener('click', function(){
  ht5.classList.toggle('response__hiden-text--active')
  btn5.classList.toggle('btn--active')
})
texts[5].addEventListener('click', function(){
  ht6.classList.toggle('response__hiden-text--active')
  btn6.classList.toggle('btn--active')
})
