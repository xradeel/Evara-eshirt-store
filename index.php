﻿<?php
include("helpers/config.php");
include("helpers/variables.php");
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 18:17:55 GMT -->

<head>
  <meta charset="utf-8" />
  <title>Home | <?php echo (constant('SiteTitle')); ?></title>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/maind134.css" />
</head>

<body>
  <!-- modal veiw -->
  <?php
  // include("components/poster-modal.php") 
  ?>
  <!-- link headers -->
  <?php
  // Quick view header
  require("components/quick-view.php");
  require("components/header-one.php");
  require("components/header-mobile.php");
  ?>


  <main class="main">
    <section class="home-slider position-relative pt-50">
      <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
        <div class="single-hero-slider single-animation-wrap">
          <div class="container">
            <div class="row align-items-center slider-animated-1">
              <div class="col-lg-5 col-md-6">
                <div class="hero-slider-content-2">
                  <h4 class="animated">Trade-in offer</h4>
                  <h2 class="animated fw-900">Supper value deals</h2>
                  <h1 class="animated fw-900 text-brand">On all products</h1>
                  <p class="animated">
                    Save more with coupons & up to 70% off
                  </p>
                  <a class="animated btn btn-brush btn-brush-3" href="shop-product-full.php">
                    Shop Now
                  </a>
                </div>
              </div>
              <div class="col-lg-7 col-md-6">
                <div class="single-slider-img single-slider-img-1">
                  <img class="animated slider-1-1" src="assets/imgs/slider/slider-1.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-slider single-animation-wrap">
          <div class="container">
            <div class="row align-items-center slider-animated-1">
              <div class="col-lg-5 col-md-6">
                <div class="hero-slider-content-2">
                  <h4 class="animated">Hot promotions</h4>
                  <h2 class="animated fw-900">Fashion Trending</h2>
                  <h1 class="animated fw-900 text-7">Great Collection</h1>
                  <p class="animated">
                    Save more with coupons & up to 20% off
                  </p>
                  <a class="animated btn btn-brush btn-brush-2" href="shop-product-full.php">
                    Discover Now
                  </a>
                </div>
              </div>
              <div class="col-lg-7 col-md-6">
                <div class="single-slider-img single-slider-img-1">
                  <img class="animated slider-1-2" src="assets/imgs/slider/slider-2.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-hero-slider single-animation-wrap">
          <div class="container">
            <div class="row align-items-center slider-animated-1">
              <div class="col-lg-5 col-md-6">
                <div class="hero-slider-content-2">
                  <h4 class="animated">Upcoming Offer</h4>
                  <h2 class="animated fw-900">Big Deals From</h2>
                  <h1 class="animated fw-900 text-8">Manufacturer</h1>
                  <p class="animated">Clothing, Shoes, Bags, Wallets...</p>
                  <a class="animated btn btn-brush btn-brush-1" href="shop-product-full.php">
                    Shop Now
                  </a>
                </div>
              </div>
              <div class="col-lg-7 col-md-6">
                <div class="single-slider-img single-slider-img-1">
                  <img class="animated slider-1-3" src="assets/imgs/slider/slider-3.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-arrow hero-slider-1-arrow"></div>
    </section>
    <section class="featured section-padding position-relative">
      <div class="container">
        <div class="row">
          <?php
          $Query = "SELECT * FROM bannerfeatures WHERE status = 1";
          $Result = mysqli_query($conn, $Query);
          if ($Result->num_rows > 0) {
            while ($row = mysqli_fetch_array($Result)) {
          ?>
              <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                <div class="banner-features wow fadeIn animated hover-up">
                  <img src="<?php echo $row['iconpath']; ?>" alt="" />
                  <h4 class="bg-1"><?php echo $row['title']; ?></h4>
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
    <section class="product-tabs section-padding position-relative wow fadeIn animated">
      <div class="bg-square"></div>
      <div class="container">
        <div class="tab-header">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">
                Featured
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">
                Popular
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                New added
              </button>
            </li>
          </ul>
          <a href="#" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
        </div>
        <!--End nav-tabs-->
        <div class="tab-content wow fadeIn animated" id="myTabContent">
          <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
            <div class="row product-grid-4">
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">Hot</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Clothing</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Colorful Pattern Shirts</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>90%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="new">New</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Clothing</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Plain Color Pocket Shirts</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>50%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$138.85 </span>
                      <span class="old-price">$255.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="best">Best Sell</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Shirts</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Vintage Floral Oil Shirts</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>95%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$338.85 </span>
                      <span class="old-price">$445.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="sale">Sale</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Clothing</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Colorful Hawaiian Shirts</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$123.85 </span>
                      <span class="old-price">$235.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-xs-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">-30%</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Shirt</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Flowers Sleeve Lapel Shirt</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$28.85 </span>
                      <span class="old-price">$45.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-xs-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">-22%</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Shirts</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Ethnic Floral Casual Shirts</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-xs-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="new">New</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Shoes</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Stitching Hole Sandals</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>98%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$1275.85 </span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Shirt</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Mens Porcelain Shirt</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End product-grid-4-->
          </div>
          <!--En tab one (Featured)-->
          <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
            <div class="row product-grid-4">
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">Hot</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Donec </a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Lorem ipsum dolor</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>90%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="new">New</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Music</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Sed tincidunt interdum</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>50%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$138.85 </span>
                      <span class="old-price">$255.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="best">Best Sell</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Watch</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Fusce metus orci</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>95%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$338.85 </span>
                      <span class="old-price">$445.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="sale">Sale</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Music</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Integer venenatis libero</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$123.85 </span>
                      <span class="old-price">$235.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">-30%</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Speaker</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Cras tempor orci id</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$28.85 </span>
                      <span class="old-price">$45.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">-22%</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Camera</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Nullam cursus mi qui</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="new">New</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Phone</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Fusce fringilla ultrices</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>98%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$1275.85 </span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Accessories </a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Sed sollicitudin est</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End product-grid-4-->
          </div>
          <!--En tab two (Popular)-->
          <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
            <div class="row product-grid-4">
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">Hot</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Music</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Donec ut nisl rutrum</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>90%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="new">New</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Music</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Nullam dapibus pharetra</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>50%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$138.85 </span>
                      <span class="old-price">$255.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="best">Best Sell</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Watch</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Morbi dictum finibus</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>95%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$338.85 </span>
                      <span class="old-price">$445.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="sale">Sale</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Music</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Nunc volutpat massa</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$123.85 </span>
                      <span class="old-price">$235.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">-30%</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Speaker</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Nullam ultricies luctus</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$28.85 </span>
                      <span class="old-price">$45.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="hot">-22%</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Camera</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Nullam mattis enim</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                    <div class="product-badges product-badges-position product-badges-mrg">
                      <span class="new">New</span>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Phone</a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">Vivamus sollicitudin</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>98%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$1275.85 </span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                <div class="product-cart-wrap mb-30">
                  <div class="product-img-action-wrap">
                    <div class="product-img product-img-zoom">
                      <a href="shop-product-full.php">
                        <img class="hover-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                        <img class="default-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                      </a>
                    </div>
                    <div class="product-action-1">
                      <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                      <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                      <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                    </div>
                  </div>
                  <div class="product-content-wrap">
                    <div class="product-category">
                      <a href="shop-grid-left.php">Accessories </a>
                    </div>
                    <h2>
                      <a href="shop-product-full.php">
                        Donec ut nisl rutrum</a>
                    </h2>
                    <div class="rating-result" title="90%">
                      <span>
                        <span>70%</span>
                      </span>
                    </div>
                    <div class="product-price">
                      <span>$238.85 </span>
                      <span class="old-price">$245.8</span>
                    </div>
                    <div class="product-action-1 show">
                      <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End product-grid-4-->
          </div>
          <!--En tab three (New added)-->
        </div>
        <!--End tab-content-->
      </div>
    </section>
    <section class="banner-2 section-padding pb-0">
      <div class="container">
        <div class="banner-img banner-big wow fadeIn animated f-none">
          <img src="assets/imgs/banner/banner-4.png" alt="" />
          <div class="banner-text d-md-block d-none">
            <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
            <h1 class="fw-600 mb-20">
              We're an Apple <br />Authorised Service Provider
            </h1>
            <a href="shop-grid-left.php" class="btn">Learn More <i class="fi-rs-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <section class="popular-categories section-padding mt-15 mb-25">
      <div class="container wow fadeIn animated">
        <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
        <div class="carausel-6-columns-cover position-relative">
          <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
          <div class="carausel-6-columns" id="carausel-6-columns">
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-1.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">T-Shirt</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php">
                  <img src="assets/imgs/shop/category-thumb-2.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Bags</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-3.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Sandan</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-4.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Scarf Cap</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-5.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Shoes</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-6.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Pillowcase</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-7.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Jumpsuits</a></h5>
            </div>
            <div class="card-1">
              <figure class="img-hover-scale overflow-hidden">
                <a href="shop-grid-left.php"><img src="assets/imgs/shop/category-thumb-8.jpg" alt="" /></a>
              </figure>
              <h5><a href="shop-grid-left.php">Hats</a></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="banners mb-15">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="banner-img wow fadeIn animated">
              <img src="assets/imgs/banner/banner-1.png" alt="" />
              <div class="banner-text">
                <span>Smart Offer</span>
                <h4>Save 20% on <br />Woman Bag</h4>
                <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="banner-img wow fadeIn animated">
              <img src="assets/imgs/banner/banner-2.png" alt="" />
              <div class="banner-text">
                <span>Sale off</span>
                <h4>Great Summer <br />Collection</h4>
                <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-md-none d-lg-flex">
            <div class="banner-img wow fadeIn animated mb-sm-0">
              <img src="assets/imgs/banner/banner-3.png" alt="" />
              <div class="banner-text">
                <span>New Arrivals</span>
                <h4>Shop Today’s <br />Deals & Offers</h4>
                <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding">
      <div class="container wow fadeIn animated">
        <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
        <div class="carausel-6-columns-cover position-relative">
          <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
          <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                  <span class="hot">Hot</span>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2>
                  <a href="shop-product-full.php">Lorem ipsum dolor</a>
                </h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$238.85 </span>
                  <span class="old-price">$245.8</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                  <span class="new">New</span>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2><a href="shop-product-full.php">Aliquam posuere</a></h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$173.85 </span>
                  <span class="old-price">$185.8</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                  <span class="sale">Sale</span>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2>
                  <a href="shop-product-full.php">Sed dapibus orci</a>
                </h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$215.85 </span>
                  <span class="old-price">$235.8</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                  <span class="hot">.33%</span>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2><a href="shop-product-full.php">Donec congue</a></h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$83.8 </span>
                  <span class="old-price">$125.2</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                  <span class="hot">-25%</span>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2><a href="shop-product-full.php">Curabitur porta</a></h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$1238.85 </span>
                  <span class="old-price">$1245.8</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
                <div class="product-badges product-badges-position product-badges-mrg">
                  <span class="new">New</span>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2>
                  <a href="shop-product-full.php">Praesent maximus</a>
                </h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$123 </span>
                  <span class="old-price">$156</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
            <div class="product-cart-wrap small hover-up">
              <div class="product-img-action-wrap">
                <div class="product-img product-img-zoom">
                  <a href="shop-product-full.php">
                    <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                    <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                  </a>
                </div>
                <div class="product-action-1">
                  <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="fi-rs-eye"></i></a>
                  <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                  <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                </div>
              </div>
              <div class="product-content-wrap">
                <h2><a href="shop-product-full.php">Vestibulum ante</a></h2>
                <div class="rating-result" title="90%">
                  <span> </span>
                </div>
                <div class="product-price">
                  <span>$238.85 </span>
                  <span class="old-price">$245.8</span>
                </div>
              </div>
            </div>
            <!--End product-cart-wrap-2-->
          </div>
        </div>
      </div>
    </section>
    <section class="deals section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 deal-co">
            <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="
                  background-image: url('assets/imgs/banner/menu-banner-7.jpg');
                ">
              <div class="deal-top">
                <h2 class="text-brand">Deal of the Day</h2>
                <h5>Limited quantities.</h5>
              </div>
              <div class="deal-content">
                <h6 class="product-title">
                  <a href="shop-product-full.php">Summer Collection New Morden Design</a>
                </h6>
                <div class="product-price">
                  <span class="new-price">$139.00</span><span class="old-price">$160.99</span>
                </div>
              </div>
              <div class="deal-bottom">
                <p>Hurry Up! Offer End In:</p>
                <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                <a href="shop-grid-left.php" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 deal-co">
            <div class="deal wow fadeIn animated" style="
                  background-image: url('assets/imgs/banner/menu-banner-8.jpg');
                ">
              <div class="deal-top">
                <h2 class="text-brand">Men Clothing</h2>
                <h5>Shirt & Bag</h5>
              </div>
              <div class="deal-content">
                <h6 class="product-title">
                  <a href="shop-product-full.php">Try something new on vacation</a>
                </h6>
                <div class="product-price">
                  <span class="new-price">$178.00</span><span class="old-price">$256.99</span>
                </div>
              </div>
              <div class="deal-bottom">
                <p>Hurry Up! Offer End In:</p>
                <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                <a href="shop-grid-left.php" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding">
      <div class="container">
        <h3 class="section-title mb-20 wow fadeIn animated">
          <span>Featured</span> Brands
        </h3>
        <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
          <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows"></div>
          <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-1.png" alt="" />
            </div>
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-2.png" alt="" />
            </div>
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="" />
            </div>
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-4.png" alt="" />
            </div>
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-5.png" alt="" />
            </div>
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-6.png" alt="" />
            </div>
            <div class="brand-logo">
              <img class="img-grey-hover" src="assets/imgs/banner/brand-3.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-grey-9 section-padding">
      <div class="container pt-25 pb-25">
        <div class="heading-tab d-flex">
          <div class="heading-tab-left wow fadeIn animated">
            <h3 class="section-title mb-20">
              <span>Monthly</span> Best Sell
            </h3>
          </div>
          <div class="heading-tab-right wow fadeIn animated">
            <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab" data-bs-target="#tab-one-1" type="button" role="tab" aria-controls="tab-one" aria-selected="true">
                  Featured
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab" data-bs-target="#tab-two-1" type="button" role="tab" aria-controls="tab-two" aria-selected="false">
                  Popular
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab" data-bs-target="#tab-three-1" type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                  New added
                </button>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 d-none d-lg-flex">
            <div class="banner-img style-2 wow fadeIn animated">
              <img src="assets/imgs/banner/banner-9.jpg" alt="" />
              <div class="banner-text">
                <span>Woman Area</span>
                <h4 class="mt-5">Save 17% on <br />Clothing</h4>
                <a href="shop-grid-left.php" class="text-white">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-9 col-md-12">
            <div class="tab-content wow fadeIn animated" id="myTabContent-1">
              <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel" aria-labelledby="tab-one-1">
                <div class="carausel-4-columns-cover arrow-center position-relative">
                  <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-arrows"></div>
                  <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Hot</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Nulla</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Maecenas eget</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="new">New</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Duis </a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Luctus suscipit</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$138.85 </span>
                          <span class="old-price">$145.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="best">Best Sell</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Fusce </a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Aliquam ac</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$152.85 </span>
                          <span class="old-price">$156.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">-12%</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Nunc </a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Fusce et ligula</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="sale">Sale</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Aliquam</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Morbi lacinia</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--End tab-pane-->
              <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                <div class="carausel-4-columns-cover arrow-center position-relative">
                  <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-2-arrows"></div>
                  <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Hot</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Cotton Leaf Printed 2</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="new">New</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Smart Speaker</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$138.85 </span>
                          <span class="old-price">$145.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="best">Best Sell</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Hugy Speaker</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$152.85 </span>
                          <span class="old-price">$156.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">-12%</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Smart Speaker</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="sale">Sale</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Cotton Leaf Printed</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-three-1" role="tabpanel" aria-labelledby="tab-three-1">
                <div class="carausel-4-columns-cover arrow-center position-relative">
                  <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow" id="carausel-4-columns-3-arrows"></div>
                  <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Hot</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Cotton Leaf Printed</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="new">New</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Smart Speaker</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$138.85 </span>
                          <span class="old-price">$145.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="best">Best Sell</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Hugy Speaker</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$152.85 </span>
                          <span class="old-price">$156.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">-12%</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Smart Speaker</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-cart-wrap">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="shop-product-full.php">
                            <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                            <i class="fi-rs-eye"></i></a>
                          <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="shop-wishlist.php"><i class="fi-rs-heart"></i></a>
                          <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="sale">Sale</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-grid-left.php">Watch</a>
                        </div>
                        <h2>
                          <a href="shop-product-full.php">Cotton Leaf Printed</a>
                        </h2>
                        <div class="rating-result" title="90%">
                          <span>
                            <span>70%</span>
                          </span>
                        </div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Add To Cart" class="action-btn hover-up" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End tab-content-->
          </div>
          <!--End Col-lg-9-->
        </div>
      </div>
    </section>
    <section class="section-padding">
      <div class="container pt-25 pb-20">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="section-title mb-20"><span>From</span> blog</h3>
            <div class="post-list mb-4 mb-lg-0">
              <article class="wow fadeIn animated">
                <div class="d-md-flex d-block">
                  <div class="post-thumb d-flex mr-15">
                    <a class="color-white" href="blog-post-right.php">
                      <img src="assets/imgs/blog/blog-2.jpg" alt="" />
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="entry-meta mb-10 mt-10">
                      <a class="entry-meta meta-2" href="blog-category-grid.php"><span class="post-in font-x-small">Fashion</span></a>
                    </div>
                    <h4 class="post-title mb-25 text-limit-2-row">
                      <a href="blog-post-right.php">Qualcomm is developing a Nintendo Switch-like
                        console, report says</a>
                    </h4>
                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                      <div>
                        <span class="post-on">14 April 2022</span>
                        <span class="hit-count has-dot">12M Views</span>
                      </div>
                      <a href="blog-post-right.php">Read More</a>
                    </div>
                  </div>
                </div>
              </article>
              <article class="wow fadeIn animated">
                <div class="d-md-flex d-block">
                  <div class="post-thumb d-flex mr-15">
                    <a class="color-white" href="blog-post-right.php">
                      <img src="assets/imgs/blog/blog-1.jpg" alt="" />
                    </a>
                  </div>
                  <div class="post-content">
                    <div class="entry-meta mb-10 mt-10">
                      <a class="entry-meta meta-2" href="blog-category-grid.php"><span class="post-in font-x-small">Healthy</span></a>
                    </div>
                    <h4 class="post-title mb-25 text-limit-2-row">
                      <a href="blog-post-right.php">Not even the coronavirus can derail 5G's global
                        momentum</a>
                    </h4>
                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                      <div>
                        <span class="post-on">14 April 2022</span>
                        <span class="hit-count has-dot">12M Views</span>
                      </div>
                      <a href="blog-post-right.php">Read More</a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-6">
                <div class="banner-img banner-1 wow fadeIn animated">
                  <img src="assets/imgs/banner/banner-5.jpg" alt="" />
                  <div class="banner-text">
                    <span>Accessories</span>
                    <h4>Save 17% on <br />Autumn Hat</h4>
                    <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="banner-img mb-15 wow fadeIn animated">
                  <img src="assets/imgs/banner/banner-6.jpg" alt="" />
                  <div class="banner-text">
                    <span>Big Offer</span>
                    <h4>Save 20% on <br />Women's socks</h4>
                    <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
                  </div>
                </div>
                <div class="banner-img banner-2 wow fadeIn animated">
                  <img src="assets/imgs/banner/banner-7.jpg" alt="" />
                  <div class="banner-text">
                    <span>Smart Offer</span>
                    <h4>Save 20% on <br />Eardrop</h4>
                    <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-50">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner-bg wow fadeIn animated" style="background-image: url('assets/imgs/banner/banner-8.jpg')">
              <div class="banner-content">
                <h5 class="text-grey-4 mb-15">Shop Today’s Deals</h5>
                <h2 class="fw-600">
                  Happy <span class="text-brand">Mother's Day</span>. Big Sale
                  Up to 40%
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mb-45">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
            <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
              <img src="assets/imgs/banner/banner-10.jpg" alt="" />
              <div class="banner-text">
                <span>Shoes Zone</span>
                <h4>Save 17% on <br />All Items</h4>
                <a href="shop-grid-left.php">Shop Now <i class="fi-rs-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
            <h4 class="section-title style-1 mb-30 wow fadeIn animated">
              Deals & Outlet
            </h4>
            <div class="product-list-small wow fadeIn animated">
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-3.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Fish Print Patched T-shirt</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-4.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Vintage Floral Print Dress</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-5.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Multi-color Stripe Circle Print T-Shirt</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
            <h4 class="section-title style-1 mb-30 wow fadeIn animated">
              Top Selling
            </h4>
            <div class="product-list-small wow fadeIn animated">
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-6.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Geometric Printed Long Sleeve Blosue</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-7.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Print Patchwork Maxi Dress</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-8.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Daisy Floral Print Straps Jumpsuit</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title style-1 mb-30 wow fadeIn animated">
              Hot Releases
            </h4>
            <div class="product-list-small wow fadeIn animated">
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-9.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Floral Print Casual Cotton Dress</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-1.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Ruffled Solid Long Sleeve Blouse</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
              <article class="row align-items-center">
                <figure class="col-md-4 mb-0">
                  <a href="shop-product-full.php"><img src="assets/imgs/shop/thumbnail-2.jpg" alt="" /></a>
                </figure>
                <div class="col-md-8 mb-0">
                  <h4 class="title-small">
                    <a href="shop-product-full.php">Multi-color Print V-neck T-Shirt</a>
                  </h4>
                  <div class="product-price">
                    <span>$238.85 </span>
                    <span class="old-price">$245.8</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php require("components/footer-one.php");
  require("components/pre-loader.php");
  ?>

  <!-- Vendor JS-->
  <?php require("components/js-links.php") ?>
</body>

<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 18:20:05 GMT -->

</html>