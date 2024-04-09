// $(document).ready(function () {
//   $("#registration-form").submit(function (event) {
//     // Prevent default form submission
//     event.preventDefault();

//     // Get form data
//     var formData = $(this).serialize();

//     console.log(formData);
//     // Perform validation
//     var password = $("#password").val();
//     var confirm_password = $("#confirm_password").val();
//     if (password != confirm_password) {
//       //   alert("Passwords do not match.");
//       $("#confirm_password").addClass("border-danger");
//       $("#pass_error").show();
//       return;
//     }

//     // Perform AJAX request
//     $.ajax({
//       url: "scripts/register.php", // URL of the PHP script that handles registration
//       type: "POST",
//       data: formData, // Form data
//       success: function (response) {
//         // Handle success response
//         alert(response); // Display success message or perform redirection
//       },
//       error: function (xhr, status, error) {
//         // Handle error
//         console.error(error); // Output error for debugging
//         alert("An error occurred. Please try again later.");
//       },
//     });
//   });
// });
$(document).ready(function () {
  $("#registration-form").submit(function (event) {
    // Prevent default form submission
    event.preventDefault();

    // Get form data
    var formData = $(this).serialize();
    console.log(formData);

    // Perform validation
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();
    if (password != confirm_password) {
      $("#confirm_password").addClass("border-danger");
      $("#pass_error").show();
      return; // Prevent form submission
    }

    // Perform AJAX request
    $.ajax({
      url: "scripts/register.php",
      type: "POST",
      data: formData,
      success: function (response) {
        alert(response); // Display response
        location.reload();
      },
      error: function (xhr, status, error) {
        console.error(error);
        alert("An error occurred. Please try again later.");
      },
    });
  });
});
