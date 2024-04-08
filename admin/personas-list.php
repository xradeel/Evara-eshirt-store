<?php include 'helpers/config.php'; ?>
<!DOCTYPE HTML>
<html lang="en">

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
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Team Member List</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <a href="add-persona.php" class="btn btn-primary btn-sm rounded">Add New Persona</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <?php
                    $Query = "SELECT * FROM personas";
                    $Result = mysqli_query($conn, $Query);
                    if ($Result->num_rows > 0) {
                        while ($DataRows = mysqli_fetch_array($Result)) {
                            // $DataRows['status'] = 0;
                    ?>
                            <article class="itemlist">
                                <div class="row align-items-center">
                                    <div class="col col-check flex-grow-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                        <a class="itemside" href="#">
                                            <div class="left">
                                                <img src="<?php echo "../uploads/client-persona/" . $DataRows['image']; ?>" class="img-sm img-thumbnail" alt="Item">
                                            </div>
                                            <div class="info">
                                                <h6 class="mb-0"><?php echo $DataRows['name']; ?></h6>
                                                <p><?php echo $DataRows['message']; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="col-lg-4 col-sm-2 col-4 col-status">
                                        <span class="badge rounded-pill <?php $DataRows['status'] == 1 ? print("alert-success") : print("alert-danger") ?>">
                                            <?php if ($DataRows['status'] == 1) {
                                                echo "Active";
                                            } else {
                                                echo "Non-active";
                                            }
                                            ?>
                                        </span>
                                    </div> -->
                                    <div class="col-lg-3 col-sm-2 col-4 col-action text-end">
                                        <a href="#" class="btn btn-sm font-sm rounded btn-brand mr-50">
                                            <i class="material-icons md-edit"></i> Edit
                                        </a>
                                        <a class="btn btn-sm font-sm btn-light rounded delete-persona" data-member-id="<?php echo $DataRows['id']; ?>">
                                            <i class="material-icons md-delete_forever"></i> Delete
                                        </a>

                                    </div>
                                </div> <!-- row .// -->
                            </article> <!-- itemlist  .// -->
                    <?php
                        }
                    } else {
                        echo "No Result Found";
                    }
                    ?>
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section> <!-- content-main end// -->
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
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
    <script src="assets/js/delete-persona.js" type="text/javascript"></script>
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:32 GMT -->

</html>