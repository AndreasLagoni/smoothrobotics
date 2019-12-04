jQuery(document).ready(function($) {
  $(".startiframe").click(function() {
    $(".modalvideo-wrapper").addClass("active");
    $(".closemodal").click(function() {
      $(".modalvideo-wrapper").removeClass("active");
      let iframe_src = $(".modalcontent-wrapper > iframe").attr("src");
      $(".modalcontent-wrapper > iframe").attr("src", iframe_src);
    });
  });
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
  const firstSection = document.querySelector(".item-header");
  const secondSection = document.querySelector(".maincontent-banner-header");
  const thirdSection = document.querySelector(".info-aboutus-row1");
  const fourthSection = document.querySelector(".section-partners-wrapper");
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
