<?php
// Include the database connection file
include_once '../helpers/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $member_name = $_POST['member_name'];
    $designation = $_POST['designation'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];

    // Check if image is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Handle image upload
        $image = $_FILES['image']['name'];
        $temp_image = $_FILES['image']['tmp_name'];
        $upload_dir = "../../uploads/teammembers/";
        $target_image = $upload_dir . basename($image);

        // Move uploaded image to the specified directory
        if (move_uploaded_file($temp_image, $target_image)) {
            // Insert member details into the database
            // $sql = "INSERT INTO teammembers (member_name, designation, facebook, instagram, twitter, image) VALUES ('$member_name', '$designation', '$facebook', '$instagram', '$twitter', '$image')";


            $MySqlCommand = "SELECT MAX(id) FROM teammembers";
            $Result = mysqli_query($conn, $MySqlCommand);
            $MaxID = mysqli_fetch_array($Result);
            $UserID = $MaxID['0'];
            $UserID = $UserID + 1; //2
            $Status = 1;

            // Insert data into database
            $sql = "INSERT INTO teammembers (id,name, designation, facebook, insta, twitter, image, status) VALUES ($UserID, '$member_name', '$designation', '$facebook', '$instagram', '$twitter', '$image', '$Status')";
            if ($conn->query($sql) === TRUE) {
                echo "New member added successfully.";
                echo  "<script>window.location='add-team-member.php'</script>";
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
