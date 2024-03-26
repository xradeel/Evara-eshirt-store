<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:20 GMT -->

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
                    <h2 class="content-title card-title">Products List</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <a href="#" class="btn btn-light rounded font-md">Export</a>
                    <a href="#" class="btn btn-light rounded  font-md">Import</a>
                    <a href="#" class="btn btn-primary btn-sm rounded">Create new</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row align-items-center">
                        <div class="col col-check flex-grow-0">
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="checkbox" value="">
                            </div>
                        </div>
                        <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">
                            <select class="form-select">
                                <option selected>All category</option>
                                <option>Electronics</option>
                                <option>Clothes</option>
                                <option>Automobile</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-6">
                            <input type="date" value="02.05.2022" class="form-control">
                        </div>
                        <div class="col-md-2 col-6">
                            <select class="form-select">
                                <option selected>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="card-body">
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
                                        <img src="assets/imgs/items/1.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">T-shirt for men medium size</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$34.50</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/2.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Helionic Hooded Down Jacket</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$990.99</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/3.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$76.99</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-warning">Archived</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/4.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Fanmis Men's Travel Bag</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$18.00</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/3.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Jeans Shorts for Men</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$76.99</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-danger">Disabled</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/5.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Wallet made of leather brown color</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$18.00</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-warning">Archived</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/6.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Modern Armchair for home interiors</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$76.99</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/4.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$18.00</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/3.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$76.99</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
                    <article class="itemlist">
                        <div class="row align-items-center">
                            <div class="col col-check flex-grow-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 col-8 flex-grow-1 col-name">
                                <a class="itemside" href="#">
                                    <div class="left">
                                        <img src="assets/imgs/items/4.jpg" class="img-sm img-thumbnail" alt="Item">
                                    </div>
                                    <div class="info">
                                        <h6 class="mb-0">Lace mini dress with faux leather</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-price"> <span>$180.99</span> </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-status">
                                <span class="badge rounded-pill alert-success">Active</span>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 col-date">
                                <span>02.11.2022</span>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-4 col-action text-end">
                                <a href="#" class="btn btn-sm font-sm rounded btn-brand">
                                    <i class="material-icons md-edit"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                    <i class="material-icons md-delete_forever"></i> Delete
                                </a>
                            </div>
                        </div> <!-- row .// -->
                    </article> <!-- itemlist  .// -->
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
</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:32 GMT -->

</html>