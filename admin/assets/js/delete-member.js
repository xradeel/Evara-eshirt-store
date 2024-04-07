$(document).ready(function () {
  // Add click event listener to delete buttons
  $(".delete-member").click(function (event) {
    event.preventDefault(); // Prevent default anchor behavior

    // Get the member ID from the data-member-id attribute
    var memberId = $(this).data("member-id");

    // Confirm deletion with the user
    var confirmDelete = confirm(
      `Are you sure you want to delete this team member ${memberId}?`
    );

    if (confirmDelete) {
      $.ajax({
        url: "scripts/delete-member.php", // Replace with the actual PHP file to handle deletion
        type: "POST",
        data: { member_id: memberId }, // Send member ID to the server
        success: function (response) {
          // Handle success response (e.g., reload page or update UI)
          alert("Team member deleted successfully!");
          // Example: reload the page after deletion
          location.reload();
        },
        error: function (xhr, status, error) {
          // Handle error response (e.g., display error message)
          alert("An error occurred while deleting the team member.");
        },
      });
    }
  });
});
