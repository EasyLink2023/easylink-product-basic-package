jQuery(document).ready(function () {
  var btn = jQuery("#button");
  var header = jQuery("header");
  var logo = jQuery("#logo");
  var oldSrc = logo.attr("src");
  var src = logo.attr("src");
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
  if (jQuery(window).scrollTop() > 10) {
    if (src && src.indexOf("_white") !== -1) {
      var newSrc = src.replace("_white", "");
      logo.attr("src", newSrc);
    }
    header.addClass("back");
  } else {
    header.removeClass("back");
    if (src && src.indexOf("_white") !== -1) {
      logo.attr("src", oldSrc);
    }
  }
  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 10) {
      if (src && src.indexOf("_white") !== -1) {
        var newSrc = src.replace("_white", "");
        logo.attr("src", newSrc);
      }
      header.addClass("back");
    } else {
      header.removeClass("back");
      if (src && src.indexOf("_white") !== -1) {
        logo.attr("src", oldSrc);
      }
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
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

});

function animate(element) {
    if (!element.hasClass("ms-animated")) {
      var maxval = element.data("max");
      var html = element.html();
      element.addClass("ms-animated");
      $({
        countNum: element.html(),
      }).animate(
        {
          countNum: maxval,
        },
        {
          duration: 5000,
          easing: "linear",
          step: function () {
            element.html(Math.floor(this.countNum) + html);
          },
          complete: function () {
            element.html(this.countNum + html);
          },
        }
      );
    }
  }
  $(function () {
    if (jQuery(window).scrollTop() > 100) {
      $("h3[data-max]").each(function () {
        inVisible($(this));
      });
      $("span[data-max]").each(function () {
        inVisible($(this));
      });
    }
    $(window).scroll(function () {
      $("h3[data-max]").each(function () {
        inVisible($(this));
      });
      $("span[data-max]").each(function () {
        inVisible($(this));
      });
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

window.addEventListener('load', function () {
  $(".training_items").slick({
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

