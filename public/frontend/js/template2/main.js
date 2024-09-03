
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).width() > 992) {
            if ($(this).scrollTop() > 45) {
                $('.sticky-top .container').addClass('shadow-sm').css('max-width', '100%');
            } else {
                $('.sticky-top .container').removeClass('shadow-sm').css('max-width', $('.topbar .container').width());
            }
        } else {
            $('.sticky-top .container').addClass('shadow-sm').css('max-width', '100%');
        }
    });
});


jQuery(document).ready(function () {
  var btn = jQuery("#button");
   // Spinner
   var spinner = function () {
    setTimeout(function () {
        if ($('#spinner').length > 0) {
            $('#spinner').removeClass('show');
        }
    }, 1);
   };
   spinner(0);

    
  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 300) {
      btn.addClass("show");
    } else {
      btn.removeClass("show");
    }
  });
  btn.on("click", function (e) {
    e.preventDefault();
    jQuery("html, body").animate(
      {
        scrollTop: 0,
      },
      "300"
    );
  });

});


jQuery(function () {
  const val = $('#sec_two_text').val();
  jQuery(".texttyp").typed({
    strings: [val],
    typeSpeed: 100,
    backSpeed: 50,
    showCursor: false,
    loop: false,
  });
});
  
  $(".banner_slider").slick({
    dots: false,
    infinite: true,
    speed: 700,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: true,
    cssEase: "linear",
});

window.addEventListener('load', function () {
  $(".service_items").slick({
      dots: false,
      infinite: true,
      speed: 3000,
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: true
              }
          },
          {
              breakpoint: 600,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }
      ]
  });
});

$(document).ready(function() {
  $('.testimonial_slider_box').slick({
      dots: true,
      infinite: true,
      speed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      autoplay: false,
      autoplaySpeed: 1500,
  });
});

function inVisible(element) {
  var WindowTop = $(window).scrollTop();
  var WindowBottom = WindowTop + $(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();

  // Check if the element is in the viewport
  if (ElementBottom <= WindowBottom && ElementTop >= WindowTop) {
    animate(element);
  }
}

function animate(element) {
  if (!element.hasClass("ms-animated")) {
    var maxval = element.data("max");
    element.addClass("ms-animated");
    
    // Ensure countNum is a number to avoid concatenation issues
    $({ countNum: 0 }).animate(
      { countNum: maxval },
      {
        duration: 5000,
        easing: "linear",
        step: function () {
          element.html(Math.floor(this.countNum));
        },
        complete: function () {
          element.html(this.countNum);
        },
      }
    );
  }
}

$(function () {
  function checkVisibleElements() {
    $("span[data-max]").each(function () {
      inVisible($(this));
    });
  }

  // Initial check if the page is already scrolled down
  checkVisibleElements();

  // Check when the user scrolls
  $(window).scroll(function () {
    checkVisibleElements();
  });
});
