jQuery(document).ready(function($) {
  $(".startiframe").click(function() {
    $(".modalvideo-wrapper").addClass("active");
    $(".closemodal").click(function() {
      $(".modalvideo-wrapper").removeClass("active");
      let iframe_src = $(".modalcontent-wrapper > iframe").attr("src");
      $(".modalcontent-wrapper > iframe").attr("src", iframe_src);
    });
  });
});
