var isSP = function() {
	return $('.sp_view:visible').length != 0;
};

// accordion
$(function() {
	$('.accordion').click(function() {
		$(this).next().slideToggle();
		$(this).toggleClass('_active_');
	});
	if (isSP()) {
		$('.accordion-sp').click(function() {
			$(this).next().slideToggle();
			$(this).toggleClass('_active_');
		});
	}
});


/* スクロール後hraderにclass付与 */
$(function() {
  var $win = $(window),
      $header = $('.header'),
      animationClass = 'is-animation';
	
		$win.on('load scroll', function() {
			var value = $(this).scrollTop();
			if ( value > 100 ) {
				$header.addClass(animationClass);
			} else {
				$header.removeClass(animationClass);
			}
		});
});


// SP gnavi
$(function () {
  $('.header-menu').click(function () {
    $(this).toggleClass('_active_');
    $('body').toggleClass('_gnav-show_');
  });

  $('.gnav__item a[href*="#"],.gnav-btn a[href*="#"]').on('click', function () {
    $(".header-menu").removeClass('_active_');
    $("body").removeClass('_gnav-show_');
  });
});

/* アンカーリンク */
$(function () {
  $(document).ready(function () {
    var headerHeight = 106;
    var speed = 800;
    var urlHash = location.hash;
    if (urlHash) {
      $('html,body').stop().scrollTop(0);
      setTimeout(function () {
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({
          scrollTop: position
        }, 100);
      }, 100);
    }
    $('a[href*="#"]' + 'a:not(.non-scroll)').click(function () {
      var href = $(this).attr("href");
      var split = href.split('#');
      var target = $(split[1] == '' ? 'html' : "#" + split[1]);
      var position = target.offset().top - headerHeight;
      $('html,body').stop().animate({
        scrollTop: position
      }, speed, 'swing');
    });
  });
});

$(function () {
  if (isSP()) {
    $(document).ready(function () {
      var headerHeight = 60;
      var speed = 800;
      var urlHash = location.hash;
      if (urlHash) {
        $('html,body').stop().scrollTop(0);
        setTimeout(function () {
          var target = $(urlHash);
          var position = target.offset().top - headerHeight;
          $('body,html').stop().animate({
            scrollTop: position
          }, 100);
        }, 100);
      }
      $('a[href*="#"]' + 'a:not(.non-scroll)').click(function () {
        var href = $(this).attr("href");
        var split = href.split('#');
        var target = $(split[1] == '' ? 'html' : "#" + split[1]);
        var position = target.offset().top - headerHeight;
        $('html,body').stop().animate({
          scrollTop: position
        }, speed, 'swing');
      });
    });
  }
});

// gnavi アクティブ
document.querySelectorAll('.gnav__link , .header-contact-mail__link').forEach(link => {
  if(link.href === window.location.href){
    link.classList.add('active')
  }
})

// Tel link
const ua = navigator.userAgent.toLowerCase(),
  isMobile = /iphone/u.test(ua) || /android(?<test>.+)?mobile/u.test(ua);

if (!isMobile) {
  $('a[href^="tel:"]').on("click", function (e) {
    e.preventDefault();
  });
}

// animation
//フェードイン用のコードです
$(function(){
	$(window).on('load scroll', function() {
		$(".show").each(function() {
			var winScroll = $(window).scrollTop();
			var winHeight = $(window).height();
			var scrollPos = winScroll + (winHeight * 0.9);
			if($(this).offset().top < scrollPos) {
				$(this).css({opacity: 1, transform: 'translate(0, 0)'});
			}
		});
	});
});
//フェードイン用のコードはここまでです

$(function(){
	window.addEventListener('scroll', function(){
		const scroll = window.scrollY;
		const windowHeight = window.innerHeight;
		const boxes = document.querySelectorAll('.fade-up');

		boxes.forEach(function(box) {
			const distanceToBox = box.offsetTop;
			if(scroll + windowHeight > distanceToBox) {
				box.classList.add('is-active');
			}
		});
	});
});


$(function () {
  const pageTop = $(".pagetop");
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) { // 100pxスクロールしたら表示
      pageTop.fadeIn(); // 100px以上スクロールしたらボタンをフェードイン
    } else {
      pageTop.fadeOut(); // 100px以下になったらボタンをフェードアウト
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500 // 500ミリ秒かけてページトップに戻る
    );
    return false;
  });
});