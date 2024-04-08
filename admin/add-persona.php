<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-form-product-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:49 GMT -->

<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
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
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <?php require("components/side-bar.php") ?>
    <main class="main-wrap">
        <?php require("components/header.php") ?>
        <section class="content-main">
            <form method="post" action="scripts/add-persona.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-9">
                        <div class="content-header">
                            <h2 class="content-title">Add Persona</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Personas</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" required class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-4">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" placeholder="Type here" required class="form-control" id="organization" name="organization">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="description">Full description</label>
                                    <textarea placeholder="Type here" class="form-control" id="description" name="description" rows="4"></textarea>
                                </div>
                                <!-- <label class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="1" name="active_member">
                                    <span class="form-check-label"> Active </span>
                                </label> -->
                                <input class="btn btn-md rounded font-sm hover-up" type="submit" value="Add Member">
                            </div>
                        </div> <!-- card end// -->
                    </div>
                    <div class="col-lg-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Media</h4>
                            </div>
                            <div class="card-body">
                                <div class="input-upload">
                                    <img src="assets/imgs/theme/upload.svg" alt="">
                                    <input class="form-control" type="file" name="image" required>
                                </div>
                            </div>
                        </div> <!-- card end// -->
                    </div>
                </div>
            </form>
        </section> <!-- content-main end// -->
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Evara - T-Shirts .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-form-product-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:50 GMT -->

</html>