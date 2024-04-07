<?php
include("helpers/config.php");
include("helpers/variables.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 18:20:33 GMT -->

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/maind134.css?v=3.4">
</head>

<body>
    <!-- link headers -->
    <?php require("components/header-two.php");
    require("components/header-mobile.php");
    ?>
    <main class="main single-page">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.php" rel="nofollow">Home</a>
                    <span></span> About us
                    <span></span> All Members
                </div>
            </div>
        </div>
        <section id="team" class="pt-25 wow fadeIn animated">
            <div class="container">
                <div class="row mb-50 align-items-center">
                    <div class="col-md-6">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Team</h6>
                        <h2 class="mb-15 wow fadeIn animated">Top team of experts</h2>
                        <p class="text-grey-3 wow fadeIn animated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione optio perferendis sequi mollitia quis autem ea cupiditate possimus!</p>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="row wow fadeIn animated">
                        <?php
                        $Query = "SELECT * FROM teammembers WHERE status = 1";
                        $Result = mysqli_query($conn, $Query);
                        if ($Result->num_rows > 0) {
                            while ($DataRows = mysqli_fetch_array($Result)) {
                        ?>
                                <!--col-->
                                <div class="col-lg-3 col-md-6 mb-50">
                                    <div class="blog-card border-radius-10 overflow-hidden text-center">
                                        <img src="<?php echo "uploads/teammembers/" . $DataRows['image']; ?>" alt="Image not found" class="border-radius-10 mb-30 hover-up">
                                        <h4 class="fw-500 mb-0"><?php echo $DataRows['name']; ?></h4>
                                        <p class="fw-400 text-brand mb-10"><?php echo $DataRows['designation']; ?></p>
                                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 animated">
                                            <a href="<?php echo $DataRows['facebook']; ?>"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt="Icon not fount"></a>
                                            <a href="<?php echo $DataRows['twitter']; ?>"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                            <a href="<?php echo $DataRows['insta']; ?>"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--col-->
                        <?php
                            }
                        } else {
                            echo "No Result Found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- link footer and preloader -->
    <?php require("components/footer-one.php") ?>
    <?php require("components/pre-loader.php") ?>

    <!-- Vendor JS-->
    <?php require("components/js-links.php") ?>
</body>

</html>