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
                                                        <div class="col-sm-5">
                                                            <h2>User <b>Management</b></h2>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                                                            <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Date Created</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <a href="#"><img src="../dashboard/images/user/avatar-1.jpg" class="avatar" alt="Avatar"> Michael Holz</a>
                                                            </td>
                                                            <td>04/10/2013</td>
                                                            <td>Admin</td>
                                                            <td><span class="status text-success">&bull;</span> Active</td>
                                                            <td>
                                                                <a href="/admin/userManage" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <a href="#"><img src="../dashboard/images/user/avatar-2.jpg" class="avatar" alt="Avatar"> Paula Wilson</a>
                                                            </td>
                                                            <td>05/08/2014</td>
                                                            <td>Publisher</td>
                                                            <td><span class="status text-success">&bull;</span> Active</td>
                                                            <td>
                                                                <a href="/admin/userManage" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <a href="#"><img src="../dashboard/images/user/avatar-3.jpg" class="avatar" alt="Avatar"> Antonio Moreno</a>
                                                            </td>
                                                            <td>11/05/2015</td>
                                                            <td>Publisher</td>
                                                            <td><span class="status text-danger">&bull;</span> Suspended</td>
                                                            <td>
                                                                <a href="/admin/userManage" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>
                                                                <a href="#"><img src="../dashboard/images/user/avatar-4.jpg" class="avatar" alt="Avatar"> Mary Saveley</a>
                                                            </td>
                                                            <td>06/09/2016</td>
                                                            <td>Reviewer</td>
                                                            <td><span class="status text-success">&bull;</span> Active</td>
                                                            <td>
                                                                <a href="/admin/userManage" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>
                                                                <a href="#"><img src="../dashboard/images/user/avatar-5.jpg" class="avatar" alt="Avatar"> Martin Sommer</a>
                                                            </td>
                                                            <td>12/08/2017</td>
                                                            <td>Moderator</td>
                                                            <td><span class="status text-warning">&bull;</span> Inactive</td>
                                                            <td>
                                                                <a href="/admin/userManage" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="clearfix">
                                                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                                    <ul class="pagination">
                                                        <li class="page-item disabled"><a href="#">Previous</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
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
