<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:40 GMT -->

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
                    <h2 class="content-title card-title">Categories </h2>
                    <p>Add, edit or delete a category</p>
                </div>
                <div>
                    <input type="text" placeholder="Search Categories" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <form>
                                <div class="mb-4">
                                    <label for="product_name" class="form-label">Name</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                                </div>
                                <div class="mb-4">
                                    <label for="product_slug" class="form-label">Slug</label>
                                    <input type="text" placeholder="Type here" class="form-control" id="product_slug" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Parent</label>
                                    <select class="form-select">
                                        <option>Clothes</option>
                                        <option>T-Shirts</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description</label>
                                    <textarea placeholder="Type here" class="form-control"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary">Create category</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Slug</th>
                                            <th>Order</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>21</td>
                                            <td><b>Men clothes</b></td>
                                            <td>Men clothes</td>
                                            <td>/men</td>
                                            <td>1</td>
                                            <td class="text-end">
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
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td><b>Women fashion</b></td>
                                            <td>Fashions for Women</td>
                                            <td>/women</td>
                                            <td>2</td>
                                            <td class="text-end">
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
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>3</td>
                                            <td><b>Kids clothes</b></td>
                                            <td>Clothes for kids</td>
                                            <td>/kids</td>
                                            <td>3</td>
                                            <td class="text-end">
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
                                            <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                            <td>4</td>
                                            <td><b>Hot Gifts</b></td>
                                            <td>Hot Gifts</td>
                                            <td>/gifts</td>
                                            <td>4</td>
                                            <td class="text-end">
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
                                            <td class="text-center"><i class="material-icons md-subdirectory_arrow_right text-muted"></i></td>
                                            <td>5</td>
                                            <td><b>Electronics</b></td>
                                            <td>Electronics</td>
                                            <td>/electr</td>
                                            <td>5</td>
                                            <td class="text-end">
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
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>6</td>
                                            <td><b>Accessories</b></td>
                                            <td>Accessories</td>
                                            <td>/accessories</td>
                                            <td>6</td>
                                            <td class="text-end">
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
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>7</td>
                                            <td><b>Jewellery</b></td>
                                            <td>Jewellery</td>
                                            <td>/jewel</td>
                                            <td>7</td>
                                            <td class="text-end">
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
                                            <td class="text-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" />
                                                </div>
                                            </td>
                                            <td>8</td>
                                            <td><b>Interiors</b></td>
                                            <td>Interiors</td>
                                            <td>/interior</td>
                                            <td>8</td>
                                            <td class="text-end">
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
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
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


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend/page-categories.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Mar 2024 20:04:40 GMT -->

</html>