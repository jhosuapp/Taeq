//MENU HAMBURGUESA
const nav = document.querySelector('#hamburger');
const mainLeft = document.querySelector('#main-list');

nav.addEventListener('click', () => {
    nav.classList.toggle('open');
    mainLeft.classList.toggle('active')
});

//SLIDER

window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel__lista'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores',
		arrows: {
			prev: '.carousel__anterior',
			next: '.carousel__siguiente'
		}
	});
  const glider = new Glider(document.getElementById('glider'));

  function sliderAuto(slider, miliseconds) {
  const slidesCount = slider.track.childElementCount;
  let slideTimeout = null;
  let nextIndex = 1;

  function slide () {
    slideTimeout = setTimeout(
      function () {
        if (nextIndex >= slidesCount ) {
          nextIndex = 0;
        }
        slider.scrollItem(nextIndex++);
      },
      miliseconds
    );
  }

  slider.ele.addEventListener('glider-animated', function() {
    window.clearInterval(slideTimeout);
    slide();
  });

  slide();
  }

  sliderAuto(glider, 5000)
});

//Carrusel mobile

window.addEventListener('load', function(){
	new Glider(document.querySelector('.carousel__lista--recetas'), {
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: '.carousel__indicadores--recetas',
		arrows: {
			prev: '.carousel__anterior--recetas',
			next: '.carousel__siguiente--recetas'
		},
    responsive: [
      {
        // screens greater than >= 775px
        breakpoint: 576,
        settings: {
          // Set to `auto` and provide item width to adjust to viewport
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },{
        // screens greater than >= 1024px
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      }
    ]
	});
});