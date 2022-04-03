<!DOCTYPE html>
<html lang="en">

<head>
    <title>System Roles</title>
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
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
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
                            <?php require_once("Components/alert.php"); ?>

                            <!-- [ Main Content ] start -->
                            <div class="container-xl">
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <div class="table-title">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <h2>Avaliable <b>Roles</b></h2>
                                                </div>
                                                <div class="col">
                                                    <div class="search-box">
                                                        <i class="material-icons">&#xE8B6;</i>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="#" data-toggle="modal" data-target="#addNewRole" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Role</span></a>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        
                                        <table id="sampleTableA" class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</i></th>
                                                    <th>Creator</th>
                                                    <th>Creation Time</th>
                                                    <th>Last Update</th>
                                                    <th>State</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (isset($params['data'])) { ?>
                                                    <?php foreach ($params['data'] as $key => $value) { ?>

                                                        <tr class="<?= $value->is_active ? '' : 'table-danger' ?>">
                                                            <td><?= $value->id ?> </td>
                                                            <td><?= $value->name ?></td>
                                                            <td><?= $value->created_by ?></td>
                                                            <td><?= $value->created_at ?></td>
                                                            <td><?= $value->updated_at ?></td>
                                                            <td data-id="<?= $value->is_active ?>">
                                                                <span class="status text-<?= $value->is_active ? "success" : "danger" ?>">&bull;</span>
                                                                <?= $value->is_active ? "Active" : "Disapled" ?>
                                                            </td>

                                                            <td>
                                                                <a href="#" onclick="prepareUpdate(this)" data-id="<?= $value->id ?>" data-toggle="modal" data-target="#updateRole" class="edit" title="Edit">
                                                                    <i class="material-icons">&#xE254;</i></a>

                                                                <?php if ($value->is_active) { ?>

                                                                    <a href="#" data-id="<?= $value->id ?>" onclick="prepareDelete(this)" class="delete" title="Delete" data-toggle="modal" data-target="#deleteRole"><i class="material-icons">&#xE872;</i></a>
                                                                <?php } else { ?>
                                                                    <a href="#" data-id="<?= $value->id ?>" onclick="prepareRestore(this)" class="delete text-success" title="Restore" data-toggle="modal" data-target="#restoreRole">
                                                                        <i class="fa-solid fa-rotate-left"></i>
                                                                    </a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                <?php }
                                                } ?>

                                            </tbody>

                                        </table>
                                        

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


    <!-- Add New Role Module  -->
    <div class="modal fade show" id="addNewRole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/admin/addRole" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add New Role</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                    </div>
                    <div class="modal-body">

                        <!-- Form Group (Role Name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputRoleName">Role Name </label>
                            <input autofocus name="name" class="form-control" id="inputRoleName" type="text" placeholder="Enter Role Name" required>
                        </div>


                        <!-- Save changes button-->

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Role Module  -->
    <div class="modal fade show" id="updateRole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/admin/editRole" id="updateForm" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Update Role</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                        <input type="hidden" name="id" id="updateRoleId">
                    </div>
                    <div class="modal-body">

                        <!-- Form Group (Role Name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="updateRoleName">Role Name </label>
                            <input autofocus name="name" class="form-control" id="updateRoleName" type="text" placeholder="Enter Role Name" required>
                        </div>

                        <!-- Save changes button-->

                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="deleteRole" class="modal fade deleteModal">
        <form action="/admin/deleteRole" id="deleteForm" method="post">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="fas fa-trash-alt"></i>
                        </div>
                        <h4 class="modal-title w-100">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this Role ? This process cannot be undone.</p>
                    </div>
                    <input type="hidden" name="id" value="" id="deleteRoleId">
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="restoreRole" class="modal fade deleteModal restoreModal">
        <form action="/admin/restoreRole" id="restoreForm" method="post">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="fa-solid fa-rotate-left"> </i>
                        </div>
                        <h4 class="modal-title w-100">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to Restore this Role ? </p>
                    </div>
                    <input type="hidden" name="id" value="" id="restoreRoleId">
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Restore</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function prepareUpdate(item) {
            items = $(item).parent("td").siblings("td");
            $("#updateRoleId").val($(item).attr('data-id'));
            $("#updateRoleName").val($(items)[1].innerText);
        }

        function prepareDelete(item) {
            items = $(item).parent("td").siblings("td");
            $("#deleteRoleId").val($(item).attr('data-id'));
        }

        function prepareRestore(item) {
            items = $(item).parent("td").siblings("td");
            $("#restoreRoleId").val($(item).attr('data-id'));
        }

        $(document).ready(function() {
            $("#updateForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: $("#updateForm").attr("action"),
                    method: "PUT",
                    data: {
                        id: $("#updateRoleId").val(),
                        name: $("#updateRoleName").val(),
                        is_active: $("#updateRoleState").val()
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/roles";
                        } else {
                            alert("Faild");
                        }
                    }
                });

            });

            $("#deleteForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: $("#deleteForm").attr("action"),
                    method: "DELETE",
                    data: {
                        id: $("#deleteRoleId").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/roles";
                        } else {
                            alert("Faild");
                        }
                    }
                });

            });

            $("#restoreForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: $("#restoreForm").attr("action"),
                    method: "PUT",
                    data: {
                        id: $("#restoreRoleId").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/roles";
                        } else {
                            alert("Faild");
                        }
                    }
                });

            });
        });
    </script>
</body>

</html>