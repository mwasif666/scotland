function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
$(document).ready((function () {
  var menutoggle = $(".menu-toggle");
  var offcanvasmenu = $("#offcanvas-menu");
  var closemenu = $(".close-menu");
  menutoggle.on("click", function () {
    offcanvasmenu.addClass("toggled");
    return false;
  });
  closemenu.on("click", function () {
    offcanvasmenu.removeClass("toggled");
    return false;
  });
}))
if ($(".banner-slider").length) {
  $(".banner-slider").owlCarousel({
    loop: true,
    items: 1,
    margin: 30,
    nav: false,
    lazyLoad: true,
    smartSpeed: 1000,
    dots: false,
    autoplay: true,
    animateOut: 'fadeOut',
  });
}
if ($(".j-slide").length) {
  $(".j-slide").owlCarousel({
    loop: true,
    items: 2,
    margin: 30,
    nav: true,
    navText: ["<img src='assets/images/home/prev.png' draggable='false' width='auto' alt=''>", "<img src='assets/images/home/next.png' draggable='false' width='auto' alt=''>"],
    lazyLoad: true,
    smartSpeed: 1000,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 2,
      },
      570: {
        items: 2,
      },
      768: {
        items: 1,
      },
      1024: {
        items: 2,
      }
    }
  });
}
$('.slider-testi').owlCarousel({
  items: 3,
  margin: 30,
  stagePadding: 30,
  smartSpeed: 450,
  mouseDrag: false,
  autoplay: true,
  smartSpeed: 1000,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },
    575: {
      items: 1,
    },
    768: {
      items: 3,
    }
  }
});
$(document).ready(function () {
  $(window).scroll(function () {
    var windowYmax = 120;
    var scrolledY = $(window).scrollTop();
    if (scrolledY > windowYmax) {
      $('header .main-menu').addClass("sticky");
    } else {
      $('header .main-menu').removeClass("sticky");
      $('header .main-menu').addClass("");
    }
  });
});

function load() {
  document.getElementById('preloader').style.display = "none";
}

function openChat() {
  Tawk_API.maximize();
}
