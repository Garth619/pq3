// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'
// @codekit-prepend 'macy.js'

jQuery(document).ready(function ($) {
  $("body").addClass("ready");

  /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

  // loads wistia on click to improve initial page speed
  $(".wistia_embed").click(function () {
    //make sure to only load if Wistia is not already loaded
    let self = this;
    if (typeof Wistia === "undefined") {
      jQuery.getScript(
        "https://fast.wistia.com/assets/external/E-v1.js",
        function (data, textStatus, jqxhr) {
          // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
          // a hook we can listen for. So we need to set an interval to check when it's ready
          var interval = setInterval(function () {
            if ($(self).attr("id") && window._wq) {
              _wq.push({
                id: "_all",
                onReady: function (video) {
                  video.play();
                },
              });
              clearInterval(interval);
            }
          }, 100);
        }
      );
    } else {
      console.log("wistia is already defined");
    }
  });

  /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          );
          return false;
        }
      }
    });
  });

  /* Waypoints
     --------------------------------------------------------------------------------------- */

  function createWaypoint(
    triggerElementId,
    animatedElement,
    className,
    offsetVal,
    functionName,
    reverse
  ) {
    if (jQuery("#" + triggerElementId).length) {
      var waypoint = new Waypoint({
        element: document.getElementById(triggerElementId),
        handler: function (direction) {
          if (direction === "down") {
            jQuery(animatedElement).addClass(className);

            if (typeof functionName === "function") {
              functionName();
              this.destroy();
            }
          } else if (direction === "up") {
            if (reverse) {
              jQuery(animatedElement).removeClass(className);
            }
          }
        },
        offset: offsetVal,
        // Integer or percent
        // 500 means when element is 500px from the top of the page, the event triggers
        // 50% means when element is 50% from the top of the page, the event triggers
      });
    }
  }

  createWaypoint("section_three", "#section_three", "visible", 550, null, true);
  createWaypoint("section_four", "#section_four", "visible", 600, null, true);
  createWaypoint("section_five", "#section_five", "visible", 400, null, true);
  createWaypoint("section_six", "#section_six", "visible", 400, null, true);
  createWaypoint("consultation", "footer", "visible", 300, null, true);
  createWaypoint(
    "about_bottom_wrapper",
    "#about_bottom_wrapper",
    "visible",
    300,
    null,
    true
  );

  /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */

  $(".preload_slider").on("init", function (event, slick) {
    $(".preload_section").addClass("load_after");
  });

  $("#sec_one_slider").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    mobileFirst: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  $("#sec_two_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1169,
        settings: "unslick",
      },
    ],
  });

  $("#sec_four_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    adaptiveHeight: true,
    arrows: true,
    dots: false,
    prevArrow: "#sec_four_left_arrow",
    nextArrow: "#sec_four_right_arrow",
  });

  $("#logos_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: true,
    dots: false,
    prevArrow: "#logos_left_arrow",
    nextArrow: "#logos_right_arrow",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 1380,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 1695,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5,
        },
      },
    ],
  });

  $("#lp_sec_one_slider").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    mobileFirst: true,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  $("#lp_sec_two_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    adaptiveHeight: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      // {
      //   breakpoint: 1170,
      //   settings: "unslick",
      // },
    ],
  });

  $("#lp_sec_four_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1170,
        settings: "unslick",
      },
    ],
  });

  /* Landing Page
--------------------------------------------------------------------------------------- */

  // var macyInstance = Macy({
  //   container: "#lp_sec_five_bullets",
  //   columns: 2,
  //   margin: 49,
  //   breakAt: {
  //     768: 1,
  //   },
  // });

  /* Case Results Page
--------------------------------------------------------------------------------------- */

  // mimic select dropdown when you click the top the dropdown part slides down

  $("#select_input").on("click", function (e) {
    $(this).next("#select_dropdown").toggleClass("open");
  });

  // when you click on a list item you want, this gets the text() info then traverses to the top and replaces the text with the new text

  $("#select_dropdown_inner ul li").on("click", function (e) {
    // gets text

    var caseresultstext = $(this).text();

    // takes the text and climbs back up to the top and replaces the text with the new text, there is probably cleaner ways to do this haha

    $(this)
      .closest("#select_dropdown_inner")
      .parent()
      .prev("#select_input")
      .find("span")
      .replaceWith(
        "<span id='select_input_title'>" + caseresultstext + "<span>"
      );

    // then the dropdown slides back up

    $("#select_dropdown").removeClass("open");
  });

  // this mimics the way a select dropdown closes when you decide not to choose an option but just click outside of the select, the dropdown slides back up too

  $(document).click(function (e) {
    var container = $("#select_dropdown_wrapper");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $("#select_dropdown").removeClass("open");
    }
  });

  if ($(".tax-case_results_category").length) {
    $("li.case_results_item").addClass("current-menu-item");
  }

  /* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */

  $("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  // not found go back button

  function goBack() {
    window.history.back();
  }

  $("span.go_back").on("click", function (e) {
    goBack();
  });

  /* Red Double Line Styling Insert
--------------------------------------------------------------------------------------- */

  $('<span class="double_line"></span>').insertAfter(".widget h3");

  //$('<span class="double_line blockquote"></span>').insertBefore("blockquote");

  $('<span class="double_line"></span>').insertAfter(
    "ul.pa_directory_top_menu > li > a"
  );

  /* Sidebar Current Class for Blog Sidebars
--------------------------------------------------------------------------------------- */

  // add active to blog widgets that dont show a built in current class

  var pgurl = window.location.href;

  $(".sidebar_box.sidebar_blog ul li").each(function () {
    if ($(this).find("a").attr("href") == pgurl)
      $(this).addClass("blog-active");
  });

  $(".sidebar_box ul.menu > li.menu-item-has-children > a").on(
    "click",
    function (e) {
      $(this).next("ul.sub-menu").slideToggle(300);

      $(this).parent().toggleClass("active");
    }
  );

  /* Resize Nav Functions
--------------------------------------------------------------------------------------- */

  // resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page

  // nav

  //$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

  $("#menu_wrapper").on("click", function (e) {
    $("#header_right").toggleClass("open");

    $("nav").slideToggle(400);
  });

  function navDesktop() {
    $("header nav").addClass("nav_desktop");

    $("header nav li.menu-item-has-children > a")
      .next("ul.sub-menu")
      .removeClass("open");

    $("header nav").removeClass("nav_tablet");
  }

  function navTablet() {
    $("header nav").removeClass("nav_desktop");

    $("header nav").addClass("nav_tablet");
  }

  function tabletClick() {
    //$(this).next('ul.sub-menu').slideToggle(350);

    $(this).next("ul.sub-menu").toggleClass("active");

    $(this).parent().toggleClass("active");

    $(this).toggleClass("active");
  }

  // nav

  if ($(window).width() >= 1066) {
    navDesktop();
  }

  if ($(window).width() < 1066) {
    navTablet();

    $("header nav li.menu-item-has-children > a")
      .off()
      .on("click", tabletClick);
  }

  // resize window width and fire functions

  $(window).resize(
    _.debounce(function () {
      if ($(window).width() >= 1066) {
        navDesktop();

        // off

        $("header nav li.menu-item-has-children > a").off("click", tabletClick);
      }

      if ($(window).width() < 1066) {
        navTablet();

        // off

        $("header nav li.menu-item-has-children > a")
          .off()
          .on("click", tabletClick);
      }
    }, 100)
  );
}); // document ready
