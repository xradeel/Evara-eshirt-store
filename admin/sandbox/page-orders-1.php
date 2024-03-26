<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-orders-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:40 GMT -->

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
                    <h2 class="content-title card-title">Order List </h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <input type="text" placeholder="Search order ID" class="form-control bg-white">
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0901</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb969a898d9295bb9e839a968b979ed5989496">[email&#160;protected]</a></td>
                                    <td>$9.00</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>03.12.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Leslie Alexander</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="68040d1b04010d280d10090518040d460b0705">[email&#160;protected]</a></td>
                                    <td>$46.61</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>21.02.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="583d2b2c303d2a183d20393528343d763b3735">[email&#160;protected]</a></td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="254056514d405765405d44485549400b464a48">[email&#160;protected]</a></td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Jenny Wilson</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="39535c575740795c41585449555c175a5654">[email&#160;protected]</a></td>
                                    <td>$589.99</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>22.05.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2112</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="573a3625213e3917322f363a273b327934383a">[email&#160;protected]</a></td>
                                    <td>$16.58</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.04.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>7897</td>
                                    <td><b>Albert Flores</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e889848a8d9a9ca88d90898598848dc68b8785">[email&#160;protected]</a></td>
                                    <td>$10.00</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>13.03.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2323</td>
                                    <td><b>Wade Warren</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c1b6a0a5a481a4b9a0acb1ada4efa2aeac">[email&#160;protected]</a></td>
                                    <td>$105.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.09.2019</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2324</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f555e515a7f5a475e524f535a115c5052">[email&#160;protected]</a></td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2325</td>
                                    <td><b>Savannah Nguyen</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb889a8d9a95959a93bb9e839a968b979ed5989496">[email&#160;protected]</a></td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.03.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2326</td>
                                    <td><b>Guy Hawkins</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="690e1c10290c11080419050c470a0604">[email&#160;protected]</a></td>
                                    <td>$767.50</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2327</td>
                                    <td><b>Darrell Steward</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3054514242555c705548515d405c551e535f5d">[email&#160;protected]</a></td>
                                    <td>$406.27</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>14.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2328</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a505b545f7a5f425b574a565f14595557">[email&#160;protected]</a></td>
                                    <td>$601.13</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>18.03.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>2329</td>
                                    <td><b>Darlene Robertson</b></td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="553130273c303b3015302d34382539307b363a38">[email&#160;protected]</a></td>
                                    <td>$948.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>03.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- table-responsive //end -->
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            <div class="pagination-area mt-15 mb-50">
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
                    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-orders-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:40 GMT -->

</html>