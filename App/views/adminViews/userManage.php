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
                            <div class="container emp-profile">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="profile-img">
                                                <img src="../dashboard/images/user/avatar-2.jpg" alt="" />
                                                <div class="file btn btn-lg btn-primary">
                                                    Change Photo
                                                    <input type="file" name="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profile-head">
                                                <h5>
                                                    Name Of User
                                                </h5>
                                                <h6>
                                                    User Role Name
                                                </h6>
                                                <p class="proile-rating">Permissions : <span>8/10</span></p>
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="profile" aria-selected="false">Contact</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="profile" aria-selected="false">Payment Methods</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="profile-work">
                                                <p>Active Logins</p>
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row"><a href="">Android Phone</a></th>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"><a href="">Tablet vdc12</a></th>

                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"><a href="">Windows 10 Labtop</a></th>

                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="tab-content profile-tab" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="d-flex flex-row justify-content-end mb-3">
                                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#editUserInfo"><i class="fa fa-edit"></i> <span>Edit This Info</span></a>
                                                            </div>
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">User Id</th>
                                                                        <td>11102</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">User Name</th>
                                                                        <td>Emran Ali Abdullah</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Email</th>
                                                                        <td>alhaddademran@gmail.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Password</th>
                                                                        <td>*******7890</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Role</th>
                                                                        <td>Admin</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Account Status</th>
                                                                        <td>Active</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab">

                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="d-flex flex-row justify-content-end mb-3">
                                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#editUserContacts"><i class="fa fa-edit"></i> <span>Edit User Contacts</span></a>
                                                            </div>
                                                            <table class="table table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">City</th>
                                                                        <td>Taiz</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Address</th>
                                                                        <td>Yemen-Taiz Saber</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Phone</th>
                                                                        <td>+967-770-774-255</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Address Status</th>
                                                                        <td>Active</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="profile-tab">


                                                    <div class="d-flex flex-row justify-content-end mb-3">
                                                        <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#editUserPayments"><i class="fa fa-plus-circle"></i> <span>Add New Payment</span></a>
                                                    </div>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Image</th>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td><img width="50" src="../dashboard/icons/master-card.svg" alt=""></td>
                                                                <td>Master Card</td>
                                                                <td>Active</td>
                                                                <td>
                                                                    <a href="#" data-toggle="modal" data-target="#editUserPayments" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td><img width="50" src="../dashboard/icons/visa-card.svg" alt=""></td>
                                                                <td>Visa Card</td>
                                                                <td>Non Active</td>
                                                                <td>
                                                                    <a href="#" data-toggle="modal" data-target="#editUserPayments" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td><img width="50" src="../dashboard/icons/qitaf-card.svg" alt=""></td>
                                                                <td>Qitaf Card</td>
                                                                <td>Active</td>
                                                                <td>
                                                                    <a href="#" data-toggle="modal" data-target="#editUserPayments" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                                    <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

    <!-- Edit UserInfo Module  -->
    <div class="modal fade show" id="editUserInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Edit UserInfo</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                    </div>
                    <div class="modal-body">

                        <!-- Form Group (UserInfo Name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUserName">User Name </label>
                            <input name="name" class="form-control" id="inputUserName" type="text" placeholder="Enter User Name" required>
                        </div>

                        <!-- Form Group (User Email)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmail">Email </label>
                            <input name="email" class="form-control" id="inputEmail" type="email" placeholder="Enter Email" required>
                        </div>

                        <!-- Form Group (User Password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPassword">Password </label>
                            <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Enter Password" required>
                        </div>

                        <!-- Form Group (User Conf-Password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputConfPassword">Confirm Password </label>
                            <input name="rePassword" class="form-control" id="inputConfPassword" type="password" placeholder="Confirm Password" required>
                        </div>

                        <!-- Form Group (Role)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUserRole">Account Role </label>
                            <select class="form-control" name="is_active" id="inputUserRole" required>
                        <option value="1"> User</option>
                        <option value="2"> Admin</option>
                        </select>
                        </div>

                        <!-- Form Group (Status)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUserState">Account Status </label>
                            <select class="form-control" name="is_active" id="inputUserState" required>
                        <option value="1"> Active</option>
                        <option value="0"> Not Active</option>
                        </select>
                        </div>



                        <!-- Save changes button-->

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Save" class="btn curr-bg curr-text" data-dismiss="modal" data-toggle="modal" data-target="#doneModal">
                        <!-- <input type="submit" value="Save" class="btn curr-bg curr-text"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit User Contact Module  -->
    <div class="modal fade show" id="editUserContacts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Edit UserInfo</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                    </div>
                    <div class="modal-body">

                        <!-- Form Group (City)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputCityName">City </label>
                            <select class="form-control" name="city" id="inputCityName" required>
                        <option value="1"> Taiz</option>
                        <option value="2"> Aden</option>
                        <option value="2"> Sana'a</option>
                        </select>
                        </div>

                        <!-- Form Group (User Email)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAddress">Address </label>
                            <input name="address" class="form-control" id="inputAddress" type="text" placeholder="Enter Address" required>
                        </div>

                        <!-- Form Group (User Phone)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPhone">Phone </label>
                            <input name="phone" class="form-control" id="inputPhone" type="tel" placeholder="Enter Phone" required>
                        </div>


                        <!-- Form Group (Status)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUserState">Account Status </label>
                            <select class="form-control" name="is_active" id="inputUserState" required>
                        <option value="1"> Active</option>
                        <option value="0"> Not Active</option>
                        </select>
                        </div>



                        <!-- Save changes button-->

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Save" class="btn curr-bg curr-text" data-dismiss="modal" data-toggle="modal" data-target="#doneModal">
                        <!-- <input type="submit" value="Save" class="btn curr-bg curr-text"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit User Payment Module  -->
    <div class="modal fade show" id="editUserPayments" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Edit Payment</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                    </div>
                    <div class="modal-body">

                        <!-- Form Group (Name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPaymentName">Name </label>
                            <select class="form-control" name="name" id="inputPaymentName" required>
                        <option value="1"> Master Card</option>
                        <option value="2"> Visa Card</option>
                        <option value="3"> Qitaf Card</option>
                        </select>
                        </div>

                        <!-- Form Group (Image)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPaymentImage">Image </label>
                            <select class="form-control" name="image" id="inputPaymentImage" required>
                        <option value="1"> <img width="50" src="../dashboard/icons/master-card.svg" alt=""></option>
                        <option value="1"> <img width="50" src="../dashboard/icons/visa-card.svg" alt=""></option>
                        <option value="1"> <img width="50" src="../dashboard/icons/qitaf-card.svg" alt=""></option>

                        </select>
                        </div>
                        <!-- Form Group (Status)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPaymentState">Payment Status </label>
                            <select class="form-control" name="is_active" id="inputPaymentState" required>
                        <option value="1"> Active</option>
                        <option value="0"> Not Active</option>
                        </select>
                        </div>



                        <!-- Save changes button-->

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Save" class="btn curr-bg curr-text" data-dismiss="modal" data-toggle="modal" data-target="#doneModal">
                        <!-- <input type="submit" value="Save" class="btn curr-bg curr-text"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>