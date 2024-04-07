﻿<?php
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
                </div>
            </div>
        </div>
        <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Company</h6>
                        <h1 class="font-heading mb-40">
                            We are Building The Destination For Getting Things Done
                        </h1>
                        <p>Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat bibendum sapien metus.</p>
                        <p>Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh augue senectus. </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/imgs/page/about-1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="pt-25 wow fadeIn animated">
            <div class="container">
                <div class="row mb-50 align-items-center">
                    <div class="col-md-6">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Team</h6>
                        <h2 class="mb-15 wow fadeIn animated">Top team of experts</h2>
                        <p class="text-grey-3 wow fadeIn animated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione optio perferendis sequi mollitia quis autem ea cupiditate possimus!</p>
                    </div>
                    <div class="col-md-6 text-md-end mt-30">
                        <a class="btn btn-outline btn-lg btn-brand-outline font-weight-bold text-brand text-hover-white border-radius-5 btn-shadow-brand hover-up" href="page-members.php">All Members</a>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="row wow fadeIn animated">
                        <?php
                        $Query = "SELECT * FROM teammembers WHERE status = 1";
                        $Result = mysqli_query($conn, $Query);
                        if ($Result->num_rows > 0) {
                            $count = 0;
                            while ($DataRows = mysqli_fetch_array($Result)) {
                        ?>
                                <!--col-->
                                <div class="col-lg-3 col-md-6">
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
                                $count++;
                                if ($count == 4) break;
                            }
                        } else {
                            echo "No Result Found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="work" class="mt-40 pt-50 pb-50 section-border">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-5 text-uppercase  text-brand font-sm wow fadeIn animated">Evara Coporation</h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Our main branches<br> around the world</h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $Query = "SELECT * FROM mainbranches WHERE status = 1";
                    $Result = mysqli_query($conn, $Query);
                    if ($Result->num_rows > 0) {
                        while ($DataRows = mysqli_fetch_array($Result)) {
                    ?>
                            <div class="col-md-4 text-center mb-md-0 mb-4">
                                <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="<?php echo $DataRows['image']; ?>" alt="Image not found">
                                <h4 class="mt-30 mb-15 wow fadeIn animated"><?php echo $DataRows['address']; ?></h4>
                                <p class="text-grey-3 wow fadeIn animated"><?php echo $DataRows['street']; ?><br><?php echo $DataRows['postalcode']; ?></p>
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
                        $count = 0;
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
                            $count++;
                            if ($count == 6) break;
                        }
                    } else {
                        echo "No Result Found";
                    }
                    ?>
                </div>
                <div class="row mt-30">
                    <div class="col-12 text-center">
                        <p class="wow fadeIn animated">
                            <a class="btn btn-brand text-white btn-shadow-brand hover-up btn-lg" href="page-personas.php">View More</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container pb-25">
                <h3 class="section-title mb-20 wow fadeIn animated text-center"><span>Featured</span> Clients</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-1.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-2.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-6.png" alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="">
                        </div>
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


<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/page-about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 18:20:57 GMT -->

</html>