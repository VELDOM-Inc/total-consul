particlesJS("particles2-js",{
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#a0a0a0"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 176.3753266952075,
      "color": "#e8e8e8",
      "opacity": 1,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 2.5,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grab"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


/* 事業内容 */
$('.index-business-menu__list > li > a').hover(function () {
	if (window.matchMedia('(min-width:831px)').matches && !window.matchMedia('(hover: none)').matches) {
		var index = $('.index-business-menu__list > li > a').index($(this));
		$('.index-business-img__item.isShow').removeClass('isShow');
		$('.index-business-img__item').eq(index).addClass('isShow');
		
		$('.index-business-menu__link.isShow').removeClass('isShow');
		$('.index-business-menu__link').eq(index).addClass('isShow');
	}
});

if ($('.index-business-img__item').length > 0) {
	$('.index-business-img__item').eq(0).addClass('isShow');
	if (window.matchMedia('(max-width:830px)').matches || window.matchMedia('(hover: none)').matches) {
		$('.index-business-menu__list > li > a').eq(0).addClass('isShow');
		
		$('.index-business-menu__link').eq(0).addClass('isShow');
	}
}

if (window.matchMedia('(max-width:830px)').matches && $('.index-business-img__item').length > 0) {
	setInterval(function () {
		var index = $('.index-business-img__item').index($('.index-business-img__item.isShow')),
			next = index + 1;
		if (next === $('.index-business-img__item').length) {
			next = 0;
		}
		$('.index-business-menu__list > li > a.isShow').removeClass('isShow');
		$('.index-business-menu__list > li > a').eq(next).addClass('isShow');
		$('.index-business-img__item.isShow').removeClass('isShow');
		$('.index-business-img__item').eq(next).addClass('isShow');
	}, 5000);
}

/* 設備・機材導入 */
var tsushimaZoom = $('.index-facilities__inner');
var tsushimaBg = $('.index-facilities__bg');
var tsushimaBlock = $('.index-facilities__block');
var minZoom = 1;
var maxZoom = 2;

$(window).on('scroll', function(e) {
	var vh = window.innerHeight / 100;
  var scrollTop = document.documentElement.scrollTop;

	var start = $('.index-facilities').offset().top - (50 * vh);

  if (scrollTop > start) {
		tsushimaZoom.addClass('active');
		tsushimaBg.addClass('active');
		tsushimaBlock.addClass('active');
  }
	else{
		tsushimaZoom.removeClass('active');
		tsushimaBg.removeClass('active');
		tsushimaBlock.removeClass('active');
	}
});
