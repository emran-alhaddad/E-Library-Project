<!DOCTYPE html>
<html lang="en">

<head>
    <title>Authors</title>
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
                                                    <h2>Avaliable <b>Authors</b></h2>
                                                </div>
                                                <div class="col">
                                                    <div class="search-box">
                                                        <i class="material-icons">&#xE8B6;</i>

                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="#" data-toggle="modal" data-target="#addNewAuthor" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Author</span></a>
                                                </div>
                                            </div>

                                        </div>


                                        <table id="sampleTableA" class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Author Name</th>
                                                    <th>Author Phone</th>
                                                    <th>Author Email</th>
                                                    <th>Bio</th>
                                                    <th>Creator</th>
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
                                                            <td><?= $value->phone ?></td>
                                                            <td><?= $value->email ?></td>
                                                            <td><?= $value->bio ?></td>
                                                            <td><?= $value->created_by ?></td>
                                                            <td><?= $value->updated_at ?></td>
                                                            <td data-id="<?= $value->is_active ?>">
                                                                <span class="status text-<?= $value->is_active ? "success" : "danger" ?>">&bull;</span>
                                                                <?= $value->is_active ? "Active" : "Disapled" ?>
                                                            </td>

                                                            <td>
                                                                <a href="#" onclick="prepareUpdate(this)" data-id="<?= $value->id ?>" data-toggle="modal" data-target="#updateAuthor" class="edit" title="Edit">
                                                                    <i class="material-icons">&#xE254;</i></a>

                                                                <?php if ($value->is_active) { ?>

                                                                    <a href="#" data-id="<?= $value->id ?>" onclick="prepareDelete(this)" class="delete" title="Delete" data-toggle="modal" data-target="#deleteAuthor"><i class="material-icons">&#xE872;</i></a>
                                                                <?php } else { ?>
                                                                    <a href="#" data-id="<?= $value->id ?>" onclick="prepareRestore(this)" class="delete text-success" title="Restore" data-toggle="modal" data-target="#restoreAuthor">
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


    <!-- Add New Author Module  -->
    <div class="modal fade show" id="addNewAuthor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/admin/addAuthor" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add New Author</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                    </div>
                    <div class="modal-body">

                        <!-- Form Group (Author Name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAuthorName">Author Name </label>
                            <input autofocus name="name" class="form-control" id="inputAuthorName" type="text" placeholder="Enter Author Name" required>
                        </div>

                        <!-- Form Group (Author Phone)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAuthorPhone">Author Phone </label>
                            <input name="phone" class="form-control" id="inputAuthorPhone" type="tel" placeholder="Enter Author Phone">
                        </div>

                        <!-- Form Group (Author Email)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAuthorEmail">Author Email </label>
                            <input name="email" class="form-control" id="inputAuthorEmail" type="email" placeholder="Enter Author Email">
                        </div>

                        <!-- Form Group (Author Bio)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputAuthorBio">Author Bio</label>
                            <textarea class="form-control" name="bio" id="inputAuthorBio" cols="30" rows="5" style="resize: none;">
                            </textarea>
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

    <!-- Update Author Module  -->
    <div class="modal fade show" id="updateAuthor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <form method="post" action="/admin/editAuthor" id="updateForm" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Update Author</h4>
                        <a href="#" data-dismiss="modal">
                            <i class="far fa-window-close text-danger" style="font-size: 2em;"></i>
                        </a>
                        <input type="hidden" name="id" id="updateAuthorId">
                    </div>

                    <div class="modal-body">

                        <!-- Form Group (Author Name)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="updateAuthorName">Author Name </label>
                            <input autofocus name="name" class="form-control" id="updateAuthorName" type="text" placeholder="Enter Author Name" required>
                        </div>

                        <!-- Form Group (Author Phone)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="updateAuthorPhone">Author Phone </label>
                            <input name="phone" class="form-control" id="updateAuthorPhone" type="text" placeholder="Enter Author Phone" required>
                        </div>

                        <!-- Form Group (Author Email)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="updateAuthorEmail">Author Email </label>
                            <input name="email" class="form-control" id="updateAuthorEmail" type="email" placeholder="Enter Author Email">
                        </div>

                        <!-- Form Group (Author Bio)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="updateAuthorBio">Author Bio</label>
                            <textarea class="form-control" name="bio" id="updateAuthorBio" cols="30" rows="5" style="resize: none;">
                                </textarea>
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

    <div id="deleteAuthor" class="modal fade deleteModal">
        <form action="/admin/deleteAuthor" id="deleteForm" method="post">
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
                        <p>Do you really want to delete this Author ? This process cannot be undone.</p>
                    </div>
                    <input type="hidden" name="id" value="" id="deleteAuthorId">
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="restoreAuthor" class="modal fade deleteModal restoreModal">
        <form action="/admin/restoreAuthor" id="restoreForm" method="post">
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
                        <p>Do you really want to Restore this Author ? </p>
                    </div>
                    <input type="hidden" name="id" value="" id="restoreAuthorId">
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
            $("#updateAuthorId").val($(item).attr('data-id'));
            $("#updateAuthorName").val($(items)[1].innerText);
            $("#updateAuthorPhone").val($(items)[2].innerText);
            $("#updateAuthorEmail").val($(items)[3].innerText);
            $("#updateAuthorBio").val($(items)[4].innerText);
        }

        function prepareDelete(item) {
            $("#deleteAuthorId").val($(item).attr('data-id'));
        }

        function prepareRestore(item) {
            $("#restoreAuthorId").val($(item).attr('data-id'));
        }





        $(document).ready(function() {

            $("#updateForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: $("#updateForm").attr("action"),
                    method: "PUT",
                    data: {
                        id: $("#updateAuthorId").val(),
                        name: $("#updateAuthorName").val(),
                        phone: $("#updateAuthorPhone").val(),
                        email: $("#updateAuthorEmail").val(),
                        bio: $("#updateAuthorBio").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/author";
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
                        id: $("#deleteAuthorId").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/author";
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
                        id: $("#restoreAuthorId").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/author";
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