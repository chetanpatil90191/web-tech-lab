$(document).ready(function() {
  $("#registerForm").on("submit", function(e) {
    let valid = true;
    $("input, select").each(function() {
      if ($(this).val() === "") {
        $(this).css("border", "2px solid red");
        valid = false;
      } else {
        $(this).css("border", "1px solid #ccc");
      }
    });
    if (!valid) {
      e.preventDefault();
      $("#success").html("⚠️ Please fill all fields correctly.").css("color", "red");
    }
  });
});
