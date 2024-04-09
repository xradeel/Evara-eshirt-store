$(document).ready(function () {
  function checkPasswordMatch() {
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    if (password === confirm_password) {
      $("#confirm_password").removeClass("border-danger");
      $("#pass_error").hide();
    } else {
      $("#confirm_password").addClass("border-danger");
      $("#pass_error").show();
    }
  }

  // Check password match on keyup event in both password fields
  $("#password, #confirm_password").keyup(function () {
    checkPasswordMatch();
  });
  $("#registration-form").submit(function (event) {
    // Prevent default form submission
    event.preventDefault();

    // Get form data
    var formData = $(this).serialize();

    // Perform validation

    // Perform AJAX request
    $.ajax({
      url: "scripts/register.php",
      type: "POST",
      data: formData,
      success: function (response) {
        switch (response) {
          case "1":
            alert("User name already exists!");
            break;
          case "2":
            alert("Email already exists!");
            break;
          case "3":
            alert("User registered successfully!");
            window.location("page-login.php");
            break;
        }
        // alert(response); // Display response
        // location.reload();
      },
      error: function (xhr, status, error) {
        console.error(error);
        alert("An error occurred. Please try again later.");
      },
    });
  });
});
