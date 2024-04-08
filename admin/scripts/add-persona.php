<?php
// Include the database connection file
include_once '../helpers/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $organization = $_POST['organization'];
    $description = $_POST['description'];

    // Check if image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Handle image upload
        $image = $_FILES['image']['name'];
        $temp_image = $_FILES['image']['tmp_name'];
        $upload_dir = "../../uploads/client-persona/";
        $target_image = $upload_dir . basename($image);

        // Move uploaded image to the specified directory
        if (move_uploaded_file($temp_image, $target_image)) {

            $MySqlCommand = "SELECT MAX(id) FROM personas";
            $Result = mysqli_query($conn, $MySqlCommand);
            $MaxID = mysqli_fetch_array($Result);
            $UserID = $MaxID['0'];
            $UserID = $UserID + 1; //2
            $Status = 1;

            // Insert data into database
            $sql = "INSERT INTO personas (id, name, organization, message, image, status) VALUES ('$UserID', '$name', '$organization', '$description', '$image', '$Status')";
            if ($conn->query($sql) === TRUE) {
                echo "New member added successfully.";
                // echo  "<script>window.location='add-team-member.php'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error uploading image.";
        }
    } else {
        // echo ($_FILES['image']['error']);
        echo "No image uploaded.";
    }
}

// Close the database connection
$conn->close();
