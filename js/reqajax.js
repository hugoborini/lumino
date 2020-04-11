$(document).ready(function (e) {
  $(".search__input").keyup(function () {
    $(".show_up").show();
    var text = $(this).val();
    $.ajax({
      type: "GET",
      url: "index.php?action=search",
      data: "txt=" + text,
      success: function (data) {
        $(".show_up").html(data);
      }
    });
  });
});
