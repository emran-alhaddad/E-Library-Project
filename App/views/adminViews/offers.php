<!DOCTYPE html>
<html lang="en">

<head>
    <title>Datta Able Free Bootstrap 4 Admin Template</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"
    />
    <meta name="author" content="CodedThemes" />

    <?= require_once("Components/styles.php"); ?>

</head>

<body>

    <?= require_once("Components/navbar.php"); ?>
        <?= require_once("Components/header.php"); ?>
        
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="container-xl">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h2>Offers <b>Management</b></h2>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="search-box">
                                                        <i class="material-icons">&#xE8B6;</i>
                                                        <input type="text" class="form-control" placeholder="Search&hellip;">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Offer</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title <i class="fa fa-sort"></i></th>
                                                    <th>Discount(%)</th>
                                                    <th>Start</th>
                                                    <th>Finish</th>
                                                    <th>Book</th>
                                                    <th>Category</th>
                                                    <th>All Books</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td> Offer Title 1 </td>
                                                    <td>15%</td>
                                                    <td>26-03-2022</td>
                                                    <td>01-05-2022</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center;">✅</td>
                                                    <td><span class="status text-success">&bull;</span> Active</td>
                                                    <td>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td> Offer Title 2 </td>
                                                    <td>15%</td>
                                                    <td>1-09-2022</td>
                                                    <td>10-09-2022</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center;">✅</td>
                                                    <td><span class="status text-success">&bull;</span> Active</td>
                                                    <td>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td> Offer Title 3 </td>
                                                    <td>15%</td>
                                                    <td>26-03-2021</td>
                                                    <td>01-05-2021</td>
                                                    <td>Book1</td>
                                                    <td></td>
                                                    <td style="text-align: center;">❌</td>
                                                    <td><span class="status text-success">&bull;</span> Active</td>
                                                    <td>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td> Offer Title 4 </td>
                                                    <td>3%</td>
                                                    <td>26-05-2021</td>
                                                    <td>01-01-2022</td>
                                                    <td></td>
                                                    <td>Category 3</td>
                                                    <td style="text-align: center;">❌</td>
                                                    <td><span class="status text-danger">&bull;</span> Finished</td>
                                                    <td>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td> Offer Title 5 </td>
                                                    <td>30%</td>
                                                    <td>01-01-2022</td>
                                                    <td>05-01-2022</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td style="text-align: center;">✅</td>
                                                    <td><span class="status text-danger">&bull;</span> Finished</td>
                                                    <td>
                                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="clearfix">
                                            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


    <?= require_once("Components/scripts.php"); ?>

</body>

</html>