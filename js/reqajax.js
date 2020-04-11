$(document).ready(function (e) {
  $(".search__input").keyup(function () {
    $(".show_up").show();
    var text = $(this).val();
    if (text.length == 0) {
      $(".show_up").hide();
    }
    $.ajax({
      type: "GET",
      url: "index.php?action=search",
      data: "txt=" + text,
      success: function (data) {
        $(".show_up").html(data);
      },
    });
  });
});
