//navigation display functions//

$(document).ready(function () {
  $("#navHome").hide(0, onloadProperties);
  $("#navAbout").hide(0, onloadProperties);
  $("#navContact").hide(0, onloadProperties);
  $("#logo").hide(0, onloadProperties);
  $("#myBtn").fadeOut(500);
});

function onloadProperties() {
  $(document).ready(function () {
    $("#navHome").fadeIn(2000);
    $("#navAbout").fadeIn(3000);
    $("#navContact").fadeIn(4000);
    $("#logo").fadeTo(5000, 1);

  });
}

//Back to top button//

$(window).scroll(function () {
  var height = $(window).scrollTop();
  if (height > 150) {
    $('#myBtn').fadeIn();
  } else {
    $('#myBtn').fadeOut();
  }
});

$(document).ready(function () {
  $("#myBtn").click(function (event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: 0
    }, "fast");
    return false;
  });

});