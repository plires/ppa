const header = document.getElementsByTagName("header")[0]
const toggle = document.getElementById('toggleIcon')
const nav = document.getElementsByTagName('nav')[0]

toggle.addEventListener('click', function(){
  menuToggle()
})

function menuToggle() {
  nav.classList.toggle('active')
  toggle.classList.toggle('active')
  
  if (hamburger.classList.contains("fa-bars")) {
    hamburger.classList.remove('fa-bars')
    hamburger.classList.add('fa-times')
  } else {
    hamburger.classList.add('fa-bars')
    hamburger.classList.remove('fa-times')
  }
}


// HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
// DEL SCROLL HACIA ARRIBA O ABAJO
var start = true;
window.addEventListener('scroll', function(){

	if ( window.scrollY > 200) {
		showlHeader()
	} else {
		hidelHeader()
	}

});

function showlHeader() {
  header.classList.add('background')
}

function hidelHeader() {
	header.classList.remove('background')
}

$('.galeria_items').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  // centerPadding: '50px',
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 5,
        infinite: true,
      }
    },
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 4,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 300,
      settings: {
        slidesToShow: 1,
      }
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


/*

toggle.addEventListener('click', function(){
	menuToggle()
});

if ( window.scrollY > 200) {
  showlHeader()
} else {
  hidelHeader()
}
*/

AOS.init();
