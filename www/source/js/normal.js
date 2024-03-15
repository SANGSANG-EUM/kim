$(document).ready(function () {

  // match height
  $('.match_h > *').matchHeight();

  // header language btn
  $('body').on('click', '.hd-lang-btn', function () {
    $(this).next('.hd-lang-ul').slideToggle();
  });
  $('body').on('click', function (event) {
    if (!$(event.target).closest('.hd-lang-wr').length) {
      $('.hd-lang-ul').slideUp();
    }
  });

  // scroll top
  $('body').on('click', '.btn-top', function () {
    $("html, body").animate({
      scrollTop: 0
    });
  });

  // header color
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('.header').addClass('white shadow');
    } else {
      $('.header').removeClass('white shadow');
    }
  });

  // header over & mobile menu
  if ($(window).width() > 1440) {
    $('body').on('mouseenter', '.header', function () {
      $('.head-menu').stop().slideDown();
      $('.header').addClass('open');
    });
    $('body').on('mouseleave', '.header', function () {
      $('.head-menu').stop().slideUp();
      $('.header').removeClass('open');
    });
  } else {
    $('body').on('click', '.hd-btn', function () {
      if ($(this).hasClass('open')) {
        $(this).removeClass('open');
        $('.header').removeClass('open');
        $('.head-menu').fadeOut();
      } else {
        $(this).addClass('open');
        $('.header').addClass('open');
        $('.head-menu').fadeIn();
      }
    });
  }

  // header search
  $('.hd-sch-btn').on('click', function(){
    if ($(this).hasClass('open')) {
      $(this).removeClass('open');
      $('header').removeClass('search');
      $('.head-sch-wr').stop().slideUp();
      $('.head-menu').css('display', 'none');
    } else {
      $(this).addClass('open');
      $('header').addClass('search');
      $('.head-sch-wr').stop().slideDown();
      $('.head-menu').css('display', 'none');
    }
  });
  $(window).scroll(function () {
    $('.hd-sch-btn').removeClass('open');
    $('header').removeClass('search');
    $('.head-sch-wr').fadeOut();
  });

  // header hidden
  // if ($(window).width() > 1024) {
  //   let last_scrollTop = 0;
  //   $(window).scroll(function () {
  //     if ($(this).scrollTop() > 150) {
  //       let tmp = $(this).scrollTop();
  //       if (tmp > last_scrollTop) {
  //         // scroll down event
  //         $('.header').addClass('hidden');
  //         // $('.gnb2-ul').fadeOut(100);
  //         // $('.head-bg').fadeOut(100);
  //       } else {
  //         // scroll up event
  //         $('.header').removeClass('hidden');
  //       }
  //       last_scrollTop = tmp;
  //     } else {
  //       $('.header').removeClass('hidden');
  //     }
  //   });
  // }

  // sub location
  $('.sub-location-btn').on('click', function () {

    if ($(this).hasClass('open')) {
      $('.sub-location-btn').removeClass('open');
      $('.sub-location-ul').stop().slideUp();
    } else {
      $('.sub-location-btn').removeClass('open');
      $('.sub-location-ul').stop().slideUp();
      $(this).addClass('open');
      $(this).next('.sub-location-ul').stop().slideDown();
    }

  });

  $('body').on('click', function (event) {
    if (!$(event.target).closest('.sub-location-btn-wr').length) {
      $('.sub-location-ul').stop().slideUp();
      $('.sub-location-btn').removeClass('open');
    }
  });

  let subtit = $('.sub-location-btn-wr').eq(1).find('.sub-location-btn').text();
  $('.sub-tit').text(subtit);

  // main visual slider
  const mainVisualTimebar = (state) => {
    if (state == 'init') {
      $(".main-vs-slide-time-in").stop().css({
        "width": "0"
      });
    } else if (state == 'ing') {
      $(".swiper-pagination-bullet-active .main-vs-slide-time-in").stop().animate({
        width: "100%"
      }, 4000, 'linear');
    } else {
      $(".main-vs-slide-time-in").stop().css({
        "width": "0"
      });
    }
  }

  let mainvsSlider = new Swiper(".main-vs-slider", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 600,
    effect: 'fade',
    pagination: {
      el: '.main-vs-slide-ctr-ul',
      clickable: true,
      renderBullet: function (index, className) {
        return '<li class="main-vs-slide-ctr-li ' + className + '"><button type="button" class="main-vs-slide-btn">' + ('0' + (index + 1)) +
          '</button><div class="main-vs-slide-time-wr"><div class="main-vs-slide-time-in"></div></div></li>';
      },
    },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    on: {
      init: function () {
        mainVisualTimebar('ing')
      },
      slideChangeTransitionEnd: function () {
        mainVisualTimebar('init')
        mainVisualTimebar('ing')
      },
    },
  });

  // main board slider
  let mainbdSlider = new Swiper(".main-board-slider", {
    // initialSlide: 0,
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 600,
    // effect : 'fade',
    navigation: {
      nextEl: '.main-board-slide-btn.next', // 다음 버튼 클래스명
      prevEl: '.main-board-slide-btn.prev', // 이번 버튼 클래스명
    },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      480: {
        slidesPerView: 1.5,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1291: {
        slidesPerView: 2.6,
        spaceBetween: 0,
      },
      1441: {
        slidesPerView: 3.8,
        spaceBetween: 30,
      }
    }
  });

  
  // industry slider
  let indSlider = new Swiper(".ind-slider", {
    // initialSlide: 0,
    slidesPerView: 4,
    spaceBetween: 20,
    loop: false,
    centeredSlides: false,
    // autoplay: {
    //   delay: 4000,
    //   disableOnInteraction: false,
    // },
    speed: 600,
    // effect : 'fade',
    navigation: {
      nextEl: '.ind-slide-btn.next', // 다음 버튼 클래스명
      prevEl: '.ind-slide-btn.prev', // 이번 버튼 클래스명
    },
    a11y: {
      prevSlideMessage: '이전 슬라이드',
      nextSlideMessage: '다음 슬라이드',
      slideLabelMessage: '총 {{slidesLength}}장의 슬라이드 중 {{index}}번 슬라이드 입니다.',
    },
    breakpoints: {
      // 480: {
      //   slidesPerView: 1.5,
      //   spaceBetween: 0,
      // },
      // 768: {
      //   slidesPerView: 2,
      //   spaceBetween: 0,
      // },
      // 1291: {
      //   slidesPerView: 2.6,
      //   spaceBetween: 0,
      // },
      // 1441: {
      //   slidesPerView: 3.8,
      //   spaceBetween: 30,
      // }
    }
  });

  if ($('.ind-slide').length < 5) {
    $('.ind-slide-btns').css('display', 'none');
    // $('.ind-slider .swiper-wrapper').css('justify-content', 'center');
  }


  // history scroll
  $(window).scroll(function () {
    let scTop = $(this).scrollTop() + 400;
    let tops = [
      $('#history1').offset().top,
      $('#history2').offset().top,
      $('#history3').offset().top,
      $('#history4').offset().top
    ];
  
    $('.history-bg img').removeClass('active');
    $('.history-bg img').eq(0).addClass('active');
    $('.history-link').removeClass('active');
    $('.history-link').eq(0).addClass('active');
    $('.history-year-li').removeClass('active');
    $('.history-year-li').eq(0).addClass('active');
    
    for (let i = tops.length - 1; i >= 0; i--) {
      if (tops[i] < scTop) {
        $('.history-bg img').removeClass('active');
        $('.history-link').removeClass('active');
        $('.history-year-li').removeClass('active');
        $('.history-bg img').eq(i).addClass('active');
        $('.history-link').eq(i).addClass('active');
        $('.history-year-li').eq(i).addClass('active');
        break;
      }
    }
  });

})