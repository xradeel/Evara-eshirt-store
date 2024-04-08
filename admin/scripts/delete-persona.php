<?php
include_once '../helpers/config.php';
if (isset($_POST['member_id'])) {
    $member_id = mysqli_real_escape_string($conn, $_POST['member_id']);
    $sql = "DELETE FROM personas WHERE id = '$member_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Persona deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Error: Persona ID not provided.";
}

mysqli_close($conn);
