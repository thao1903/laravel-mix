$(document).ready(function () {
  
  if ($(window).width() < 1024) {
    $('.menu-bars').click(function () {
      $('.mobile-sidebar').toggleClass('mobile-sidebar-toggle');
      $('.menu-bars-close').toggleClass('menu-bars-close--toggle');
    });

    $('.menu-bars-close,.mobile-sidebar-close').click(function () {
      $('.mobile-sidebar').removeClass('mobile-sidebar-toggle');
      $('.menu-bars-close').removeClass('menu-bars-close--toggle');
    });
    $(window).scroll(function () {
      var pos_body = $('html,body').scrollTop();
      if (pos_body > 80) {
        $('.header').addClass('stuck');
      } else if (pos_body <= 0) {
        $('.header').removeClass('stuck');
      }
    });
  }
  if ($(window).width() > 1024) {
    $(window).scroll(function () {
      var pos_body = $('html,body').scrollTop();
      if (pos_body > 170) {
        $('.header').addClass('stuck');
      } else if (pos_body <= 0) {
        $('.header').removeClass('stuck');
      }
    });
    $('.box-product .box-product__image').hover(
      function () {
        $(this).next('.box-product-tooltip').addClass('toggle');
      },
      function () {
        $(this).next('.box-product-tooltip').removeClass('toggle');
      }
    );
    $('.box-product-tooltip').hover(
      function () {
        $(this).addClass('toggle');
      },
      function () {
        $(this).removeClass('toggle');
      }
    );
  }


});
