jQuery(document).ready(function($) {
  // Animationer
  // Hjælper funktion
  var isInViewport = function(elem) {
    var bounding = elem.getBoundingClientRect();
    return (
      bounding.left >= 0 &&
      bounding.top <
        (window.innerHeight || document.documentElement.clientHeight) &&
      bounding.right <=
        (window.innerWidth || document.documentElement.clientWidth)
    );
  };
  // Alle sektioner
  const firstSection = document.querySelector(".intro-content");
  const secondSection = document.querySelector(".quote");
  const thirdSection = document.querySelector(".ourstory-h2");
  const fourthSection = document.querySelector(".teammembers-h2");
  window.addEventListener("scroll", function() {
    if (isInViewport(firstSection)) {
      $(firstSection).addClass("std-animafter");
    }
    if (isInViewport(secondSection)) {
      // second section
      $(secondSection).addClass("std-animafter");
    }
    if (isInViewport(thirdSection)) {
      // third section
      $(thirdSection).addClass("std-animafter");
    }
    if (isInViewport(fourthSection)) {
      // fourth section
      $(fourthSection).addClass("std-animafter");
    }
  });
});
