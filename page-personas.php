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
                    <span></span> Personas
                </div>
            </div>
        </div>
        <section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated">some facts</h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Take a look what<br> our clients say about us</h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <?php
                    $Query = "SELECT * FROM personas WHERE status = 1";
                    $Result = mysqli_query($conn, $Query);
                    if ($Result->num_rows > 0) {
                        while ($DataRows = mysqli_fetch_array($Result)) {
                    ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex">
                                    <div class="hero-card-icon icon-left-2 hover-up ">
                                        <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="<?php echo $DataRows['image']; ?>" alt="Image not found.">
                                    </div>
                                    <div class="pl-30">
                                        <h5 class="mb-5 fw-500">
                                            <?php echo $DataRows['name']; ?>
                                        </h5>
                                        <p class="font-sm text-grey-5"><?php echo $DataRows['organization']; ?></p>
                                        <p class="text-grey-3">"<?php echo $DataRows['message']; ?>"</p>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {
                        echo "No Result Found";
                    }
                    ?>
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