jQuery(document).ready(function () {
  var btn = jQuery("#button");
  var header = jQuery("header");
  var logo = jQuery("#logo");
  var oldSrc = logo.attr("src");
  var src = logo.attr("src");
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
(function ($) {
  var defaults = {
    sm: 540,
    md: 720,
    lg: 960,
    xl: 1140,
    navbar_expand: "lg",
  };
  $.fn.bootnavbar = function () {
    var screen_width = $(document).width();
    if (screen_width >= defaults.lg) {
      $(this)
        .find(".dropdown")
        .hover(
          function () {
            $(this).addClass("show");
            $(this)
              .find(".dropdown-menu")
              .first()
              .addClass("show")
              .addClass("animated fadeIn")
              .one(
                "animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd",
                function () {
                  $(this).removeClass("animated fadeIn");
                }
              );
          },
          function () {
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").first().removeClass("show");
          }
        );
    }
    $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
      if (!$(this).next().hasClass("show")) {
        $(this)
          .parents(".dropdown-menu")
          .first()
          .find(".show")
          .removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass("show");
      $(this)
        .parents("li.nav-item.dropdown.show")
        .on("hidden.bs.dropdown", function (e) {
          $(".dropdown-submenu .show").removeClass("show");
        });
      return false;
    });
  };
})(jQuery);
$(function () {
  $("#main_navbar").bootnavbar();
});
const menuBtn = document.querySelector(".menu-btn");
if (menuBtn) {
  let menuOpen = false;
  menuBtn.addEventListener("click", () => {
    if (!menuOpen) {
      menuBtn.classList.add("open");
      menuOpen = true;
    } else {
      menuBtn.classList.remove("open");
      menuOpen = false;
    }
  });
  const menuBtnBurger = document.querySelector(".menu-btn__burger");
}
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
function inVisible(element) {
  var WindowTop = $(window).scrollTop();
  var WindowBottom = WindowTop + $(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();
  if (ElementBottom <= WindowBottom && ElementTop >= WindowTop)
    animate(element);
}
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

var height = 100,
  perfData = window.performance.timing,
  EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
  time = parseInt((EstimatedTime / 1000) % 60) * 100;
// Loadbar Animation
$(".loadbar").animate(
  {
    height: height + "%",
  },
  time
);
// Fading Out Loadbar on Finised
setTimeout(function () {
  jQuery("body").addClass("loaded");

  //jQuery('#migration').modal('show');
}, time);

$(".testimonial_slider_box").slick({
  dots: true,
  infinite: true,
  speed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 1500,
});
$(".slider_box").slick({
  dots: true,
  infinite: true,
  speed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 6000,
});
