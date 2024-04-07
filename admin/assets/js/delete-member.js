$(document).ready(function () {
  $(".delete-member").click(function () {
    var memberId = $(this).closest(".team-member").data("member-id");

    // Confirm deletion
    if (confirm("Are you sure you want to delete this team member?")) {
      $.ajax({
        url: "../../scripts/delete-member.php",
        type: "POST",
        data: memberId, // Pass the member ID to the PHP script
        success: function (response) {
          console.log(response);
        },
        error: function (xhr, status, error) {
          console.error(error); // Output error for debugging
        },
      });
    }
  });
});
