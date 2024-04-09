<?php
include("../helpers/config.php");
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($Password);
    $Query = "SELECT * FROM users WHERE email = '$email' AND password = '$SecurePassword'";
    // echo $Query;
    // die;
    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0) {
        $row = mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID'] = $row->id;
        $_SESSION['USER_NAME'] = $row->username;
        $_SESSION['EMAIL'] = $row->email;
        header('Location:../index.php');
        exit();
        // echo "<script>window.location.href='index.php';</script>";
        // exit();
    } else {
?>
        <script>
            alert("Invalid Credentials")
        </script>
<?php
    }
} else {
    echo "kuch tu galat ho rha ha";
}
?>