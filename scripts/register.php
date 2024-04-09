<?php
include '../helpers/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $mdpassword = md5($password);
   // Validate and sanitize form data (e.g., check for empty fields, validate email format, etc.)

   $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
   $TokenKey = str_shuffle($TokenKey);
   $TokenKey = substr($TokenKey, 0, 32);

   $MySqlCommand = "SELECT username FROM users HAVING $username ";
   if ($MySqlCommand) die("User name already exists!");
   $MySqlCommand = "SELECT MAX(id) FROM users";
   // echo $MySqlCommand; 
   // die;
   $Result = mysqli_query($conn, $MySqlCommand);
   $MaxID = mysqli_fetch_array($Result);
   $UserID = $MaxID['0'];
   $UserID = $UserID + 1; //2

   $TodayDate = date("Ymd");
   $Reference =  $TodayDate . "_" . str_pad($UserID, 8, "0", STR_PAD_LEFT); //20240328_000000002
   $Status = 1;
   $IP = $_SERVER['REMOTE_ADDR'];

   $Query = "INSERT INTO users (id, reference, username, " .
      " email, password, status, upassword, ipaddress, lastmodified, accesstoken) " .
      " VALUES($UserID, '$Reference', '$username', " .
      "  '$email', '$mdpassword', $Status, '$password', '$IP', '$TodayDate' ,'$TokenKey')";
   if (mysqli_query($conn, $Query)) {
      echo "User registered successfully!";
   } else {
      echo "Error: " . mysqli_error($conn);
   }
} else {
   echo "Exception Found, Try Again";
}

mysqli_close($conn);
