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
  jQuery(".texttyp").typed({
    strings: ["Rigorous , Practical , Progressive and Creative"],
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
$(".solutions_items").slick({
  dots: false,
  infinite: true,
  speed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 1000,
});
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
$(".product_details_image_box").slick({
  dots: false,
  infinite: true,
  speed: 2000,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: true,
  autoplay: false,
  autoplaySpeed: 6000,
});
$(document).ready(function () {
  // Gets the video src from the data-src on each button
  var $videoSrc;
  $(".video-btn").click(function () {
    $videoSrc = $(this).data("src");
  });
  // when the modal is opened autoplay it
  $("#videoModal").on("shown.bs.modal", function (e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
    );
  });
  // stop playing the youtube video when I close the modal
  $("#videoModal").on("hide.bs.modal", function (e) {
    // a poor man's stop video
    $("#video").attr("src", "");
  });
  // document ready
});
$(document).ready(function () {
  const zoom = document.querySelector(".zoom-box");
  if (zoom) {
    $(function () {
      $(".zoom-box img").jqZoom({
        selectorWidth: 70,
        selectorHeight: 70,
        viewerWidth: 400,
        viewerHeight: 400,
      });
    });
  }
});
$(document).ready(function () {
  $(".nav-item").hover(
    function () {
      $(this).children(".nav_down").removeClass("hide-drop"); //Add an active class to the anchor
    },
    function () {
      $(this).children(".nav_down").addClass("hide-drop"); //Remove an active class to the anchor
    }
  );
});
$(document).ready(function () {
  $(".image").on("click", function () {
    var imgSrc = $(this).attr("img-src");
    $("#main-image").attr("src", imgSrc);
    $(".viewer-box img").attr("src", imgSrc);
    $(".viewer-box").remove();
    $(".zoom-selector").remove();
    $(".zoom-box img").jqZoom({
      selectorWidth: 70,
      selectorHeight: 70,
      viewerWidth: 400,
      viewerHeight: 400,
    });
  });
});
if ($(".video_box").length) {
  $(".video_box").on("click", function () {
    var url = $(this).attr("url");
    var params = "?rel=0&showinfo=0&autoplay=1";
    var newSrc = url + params;
    var openVideo = document.getElementById("open_video");
    openVideo.addEventListener("shown.bs.modal", function () {
      $("#modal_video").attr("src", newSrc);
    });
    openVideo.addEventListener("hide.bs.modal", function () {
      $("#modal_video").attr("src", "");
    });
  });
}
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

// $(document).ready(function () {
//   jQuery(
//     "p,.nav-link, li a,.nav_down_left span,button,h2,.products_content span"
//   ).addClass("translate");

//   function changeLanguage(targetLanguage) {
//     const selectedLanguage = localStorage.getItem("Language");
//     if (selectedLanguage !== targetLanguage) {
//       localStorage.clear();
//       localStorage.setItem("Language", targetLanguage);
//       location.reload();
//     }
//   }

//   $("#translateHindi").click(function () {
//     changeLanguage("hi");
//   });

//   $("#translateTamil").click(function () {
//     changeLanguage("ta");
//   });

//   $("#translateEnglish").click(function () {
//     localStorage.clear();
//     location.reload();
//   });

//   setTimeout(function () {
//     var selectedLanguage = localStorage.getItem("Language");
//     if (selectedLanguage) {
//       if (selectedLanguage === "ta") {
//         var house = $("#t_house");
//         house.html("House");
//         translateAllElements(selectedLanguage);
//       } else {
//         translateAllElements(selectedLanguage);
//       }
//     }
//   }, 5000);
//   function translateAllElements(targetLanguage) {
//     var elementsToTranslate = $(".translate");
//     var pageName = $("#page").attr("page-name");

//     if (!localStorage.getItem(pageName)) {
//       var textToTranslate = elementsToTranslate
//         .map(function () {
//           return $(this).html();
//         })
//         .get()
//         .join("||");

//       if (elementsToTranslate.length > 0) {
//         $.ajax({
//           url: "https://translation.googleapis.com/language/translate/v2",
//           method: "POST",
//           dataType: "json",
//           data: {
//             q: textToTranslate,
//             target: targetLanguage,
//             key: "AIzaSyBmHrlhlPbO7145sUqBAdkux3AtjrH3hE4",
//           },
//           success: function (response) {
//             if (response && response.data && response.data.translations) {
//               var translatedText = response.data.translations[0].translatedText;
//               var translatedTextArray = translatedText.split("||");
//               elementsToTranslate.each(function (index) {
//                 $(this).html(translatedTextArray[index]);
//               });
//               localStorage.setItem(pageName, translatedText);
//             }
//           },
//           error: function (error) {
//             console.error("Translation error:", error);
//           },
//         });
//       }
//     } else {
//       var cachedTranslation = localStorage.getItem(pageName);
//       var translatedTextArray = cachedTranslation.split("||");
//       elementsToTranslate.each(function (index) {
//         $(this).html(translatedTextArray[index]);
//       });
//     }
//   }
// });

$(document).ready(function () {
  if ($("#Product-Category").length) {
    // Bind the change event handler to the category select input
    $("#Product-Category").change(function () {
      const categoryId = $(this).val();

      // Make an Ajax request to fetch products
      $.ajax({
        type: "GET",
        url: `'http://localhost/easylink/xcmg_backup/main/get-product-from-category?category_id=${categoryId}`,
        dataType: "json", // Expect JSON response
        success: function (data) {
          // Process the received data and display it
          if (data) {
            const productList = $("#Product-Model");
            productList.empty(); // Clear previous content

            // Iterate through products and display them
            data.forEach(function (product) {
              productList.append(
                `<option value="${product.id}">${product.product_code}</option>`
              );
            });
          } else {
            console.error("No products found.");
          }
        },
        error: function (xhr, status, error) {
          console.error("Ajax request error:", error);
        },
      });
    });

    $("#fromSubmit").click(function (e) {
      e.preventDefault(); // Prevent the default form submission

      // Perform form validation using HTML5 validation
      var form = document.querySelector(".needs-validation");
      if (!form.checkValidity()) {
        form.classList.add("was-validated");
        return;
      }

      // Prepare data for the AJAX request
      var formData = {
        contact_name: $("#Name").val(),
        contact_email: $("#Email").val(),
        contact_phone: $("#Phone").val(),
        contact_product_category: $("#Product-Category").val(),
        contact_product_model: $("#Product-Model").val(),
        contact__message: $("#Message").val(),
      };

      // Convert the JSON object to a JSON string
      var jsonData = JSON.stringify(formData);

      // Send AJAX request
      $.ajax({
        type: "POST",
        url: "'http://localhost/easylink/xcmg_backup/main/contact-request",
        data: jsonData,
        success: function (response) {
          form.reset();
          const productList = $("#Product-Model");
          productList.empty(); // Clear previous content
          productList.append(
            `<option hidden value="">Select Product Category</option>`
          );
          form.classList.remove("was-validated");
          $("#liveToast").addClass("text-bg-success");
          $("#formResponce").html(response.message);
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        },
        error: function (xhr, status, error) {
          console.log("Error: " + error);
          $("#liveToast").addClass("text-bg-danger");
          $("#formResponce").html(response.message);
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        },
      });
    });
  }
});

$(document).ready(function () {
  if ($("#Product-Category2").length) {
    // Bind the change event handler to the category select input
    $("#Product-Category2").change(function () {
      const categoryId = $(this).val();

      // Make an Ajax request to fetch products
      $.ajax({
        type: "GET",
        url: `'http://localhost/easylink/xcmg_backup/main/get-product-from-category?category_id=${categoryId}`,
        dataType: "json", // Expect JSON response
        success: function (data) {
          // Process the received data and display it
          if (data) {
            const productList = $("#Product-Model2");
            productList.empty(); // Clear previous content

            // Iterate through products and display them
            data.forEach(function (product) {
              productList.append(
                `<option value="${product.id}">${product.product_code}</option>`
              );
            });
          } else {
            console.error("No products found.");
          }
        },
        error: function (xhr, status, error) {
          console.error("Ajax request error:", error);
        },
      });
    });

    $("#fromSubmit2").click(function (e) {
      e.preventDefault(); // Prevent the default form submission

      // Perform form validation using HTML5 validation
      var form = document.querySelector(".needs-validation2");
      if (!form.checkValidity()) {
        form.classList.add("was-validated");
        return;
      }

      // Prepare data for the AJAX request
      var formData = {
        contact_name: $("#Name2").val(),
        contact_email: $("#Email2").val(),
        contact_phone: $("#Phone2").val(),
        contact_product_category: $("#Product-Category2").val(),
        contact_product_model: $("#Product-Model2").val(),
        contact__message: $("#Message2").val(),
      };

      // Convert the JSON object to a JSON string
      var jsonData = JSON.stringify(formData);

      // Send AJAX request
      $.ajax({
        type: "POST",
        url: "'http://localhost/easylink/xcmg_backup/main/contact-request",
        data: jsonData,
        success: function (response) {
          form.reset();
          const productList = $("#Product-Model2");
          productList.empty(); // Clear previous content
          productList.append(
            `<option hidden value="">Select Product Category</option>`
          );
          form.classList.remove("was-validated");
          $("#liveToast").addClass("text-bg-success");
          $("#formResponce").html(response.message);
          $("#getquote").modal("hide");
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        },
        error: function (xhr, status, error) {
          console.log("Error: " + error);
          $("#liveToast").addClass("text-bg-danger");
          $("#formResponce").html(response.message);
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        },
      });
    });
  }
});

const getquote = document.getElementById("getquotespepro");
const product_quote = document.getElementById("product_quote");

if (product_quote) {
  $(product_quote).click(function () {
    $(getquote).modal("show");
    // Extract info from data-bs-* attributes
    const producName = $(this).data("product");
    const producId = $(this).data("product-id");
    const producCatName = $(this).data("product-cat-name");
    const producCatId = $(this).data("product-cat");
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = getquote.querySelector(".modal-title");
    const ProductCat = $("#Product-Category3");
    const ProductModel = $("#Product-Model3");
    // const modalBodyInput = getquote.querySelector(".modal-body input");

    modalTitle.textContent = `Get Quote For ${producName}`;
    ProductCat.empty(); // Clear previous content
    ProductModel.empty(); // Clear previous content
    ProductCat.append(
      `<option value="${producCatId}">${producCatName}</option>`
    );

    ProductModel.append(`<option value="${producId}">${producName}</option>`);
    // modalBodyInput.value = recipient;
  });
}

$(document).ready(function () {
  if ($("#Product-Category3").length) {
    $("#fromSubmit3").click(function (e) {
      e.preventDefault(); // Prevent the default form submission

      // Perform form validation using HTML5 validation
      var form = document.querySelector(".needs-validation3");
      if (!form.checkValidity()) {
        form.classList.add("was-validated");
        return;
      }

      // Prepare data for the AJAX request
      var formData = {
        contact_name: $("#Name3").val(),
        contact_email: $("#Email3").val(),
        contact_phone: $("#Phone3").val(),
        contact_product_category: $("#Product-Category3").val(),
        contact_product_model: $("#Product-Model3").val(),
        contact__message: $("#Message3").val(),
      };

      // Convert the JSON object to a JSON string
      var jsonData = JSON.stringify(formData);

      // Send AJAX request
      $.ajax({
        type: "POST",
        url: "'http://localhost/easylink/xcmg_backup/main/contact-request",
        data: jsonData,
        success: function (response) {
          form.reset();
          const productList = $("#Product-Model2");
          productList.empty(); // Clear previous content
          productList.append(
            `<option hidden value="">Select Product Category</option>`
          );
          form.classList.remove("was-validated");
          $("#liveToast").addClass("text-bg-success");
          $("#formResponce").html(response.message);
          $("#getquotespepro").modal("hide");
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        },
        error: function (xhr, status, error) {
          console.log("Error: " + error);
          $("#liveToast").addClass("text-bg-danger");
          $("#formResponce").html(response.message);
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        },
      });
    });
  }
});
