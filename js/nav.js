window.onscroll = function() {
  let mobileMenu = window.matchMedia("(max-width: 1200px)");
  if (mobileMenu.matches) {
    scrollFunctionMobile();
  } else {
    scrollFunctionWeb();
  }
};

function scrollFunctionWeb() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector(".topNav-logo").style.height = "80px";
    document.getElementById("topheader").style.height = "80px";
    var navLinks = document.querySelectorAll(".topNav-links ul li a");
    for (i = 0; i < navLinks.length; i++) {
      navLinks[i].style.fontSize = "18px";
    }
  } else {
    document.querySelector(".topNav-logo").style.height = "110px";
    document.getElementById("topheader").style.height = "110px";
    document.querySelector(".topNav-links ul").style.fontSize = "25px";
    var navLinks = document.querySelectorAll(".topNav-links ul li a");
    for (i = 0; i < navLinks.length; i++) {
      navLinks[i].style.fontSize = "25px";
    }
  }
}
function scrollFunctionMobile() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector(".topNav-logo").style.height = "80px";
    document.getElementById("topheader").style.height = "80px";
    document.querySelector(".topNav-links").style.top = "80px";
  } else {
    document.querySelector(".topNav-logo").style.height = "110px";
    document.getElementById("topheader").style.height = "110px";
    document.querySelector(".topNav-links").style.top = "110px";
  }
}
