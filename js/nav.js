window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
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
