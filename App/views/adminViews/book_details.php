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
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template" />
    <meta name="author" content="CodedThemes" />
    <?= require_once("Components/styles.php"); ?>

</head>

<body>

    <?= require_once("Components/navbar.php"); ?>
    <?= require_once("Components/header.php"); ?>

    <!-- [ Main Content ] start -->

    <div class="pcoded-main-container">
        <?php require_once("Components/alert.php"); ?>
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="container-xl">
                                <div class="collapse" id="editBook">
                                    <form method="post" class="bg-white text-dark shadow-sm " action="/admin/editBook" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Edit Book</h4>
                                        </div>
                                        <div class="modal-body">

                                        <input type="hidden" name="id" value="<?= $params['data']['books'][0]->id ?>">

                                            <!-- Form Group (Title)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputBookTitle">Book Title </label>
                                                <input name="title" class="form-control" id="inputBookTitle" type="text" placeholder="Enter Book Title" required value="<?= $params['data']['books'][0]->title ?>">
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <!-- Form Group (Price)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookPrice">Book Price </label>
                                                        <input name="price" class="form-control" id="inputBookPrice" type="number" placeholder="Enter Book Price" required value="<?= $params['data']['books'][0]->price ?>">
                                                    </div>


                                                </div>

                                                <div class="col-6">
                                                    <!-- Form Group (Number Of Pages)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookNoPages">Number Of Pages </label>
                                                        <input name="pages_number" class="form-control" id="inputBookNoPages" type="number" placeholder="Enter Number Of Pages" required value="<?= $params['data']['books'][0]->pages_number ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-4">
                                                    <!-- Form Group (Quantity)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookQuantity">Book Quantity </label>
                                                        <input name="quantity" class="form-control" id="inputBookQuantity" type="number" placeholder="Enter Quantity of This Book" required value="<?= $params['data']['books'][0]->quantity ?>">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <!-- Form Group (Format)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookFormat">Book Formate </label>
                                                        <select class="form-control" name="format" id="inputBookFormat" required >
                                                            <option value="pdf" <?= $params['data']['books'][0]->format=="pdf"?"selected":"" ?>> PDF</option>
                                                            <option <?= $params['data']['books'][0]->format!="pdf"?"selected":"" ?> value="hard copy"> Hard Copy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <!-- Form Group (Category)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookCategory">Book Category </label>
                                                        <select class="form-control" name="category_id" id="inputBookCategory" required >

                                                            <?php if (isset($params['data'])) { ?>
                                                                <?php foreach ($params['data']['categories'] as $key => $value) { ?>

                                                                    <option  value="<?= $value->id ?>" <?= $params['data']['books'][0]->category_id=== $value->id?"selected":"" ?>> <?= $value->name ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <!-- Form Group (Book Image)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookImage">Book Image </label>
                                                        <input name="image" class="form-control" id="inputBookImage" type="file">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <!-- Form Group (Author)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookAuthor">Book Author </label>
                                                        <select class="form-control" name="author_id" id="inputBookAuthor" required>
                                                            <?php if (isset($params['data'])) { ?>
                                                                <?php foreach ($params['data']['authors'] as $key => $value) { ?>

                                                                    <option <?= $params['data']['books'][0]->author_id=== $value->id?"selected":"" ?> value="<?= $value->id ?>"> <?= $value->name ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <!-- Form Group (Publisher)-->
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputBookPublisher">Book Publisher </label>
                                                        <select class="form-control" name="publisher_id" id="inputBookPublisher" required>
                                                            <?php if (isset($params['data'])) { ?>
                                                                <?php foreach ($params['data']['publishers'] as $key => $value) { ?>

                                                                    <option value="<?= $value->id ?>" <?= $params['data']['books'][0]->publisher_id=== $value->id?"selected":"" ?>> <?= $value->name ?></option>
                                                            <?php }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (Description)-->
                                                <div class="col-md-12">
                                                    <label class="small mb-1" for="inputBookDescription">Book Description</label>
                                                    <textarea class="form-control" name="description" id="inputBookDescription" cols="30" rows="5" style="resize: none;">
                                                    <?= $params['data']['books'][0]->description?>
                                                </textarea>

                                                </div>
                                            </div>


                                            <!-- Save changes button-->

                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" value="Save" class="btn btn-primary w-25">
                                        </div>
                                    </form>
                                </div>
                                <div class="row">

                                    <div class="col d-flex flex-row justify-content-end">
                                        <a href="#" class="btn btn-secondary" data-toggle="collapse" data-target="#editBook"><i class="fa fa-edit"></i> <span>Edit This Book</span></a>
                                        <?php if ($params['data']['books'][0]->is_active) { ?>
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteBook"><i class="fa fa-trash"></i> <span>Delete This Book</span></a>
                                        <?php } else { ?>
                                            <a href="#" class="btn btn-success text-dark" data-toggle="modal" data-target="#restoreBook"><i class="fa fa-rotate-left"></i> <span>Restore This Book</span></a>
                                        <?php } ?>
                                    </div>

                                </div>
                                <div class="row <?= $params['data']['books'][0]->is_active ? '' : 'table-danger' ?>">
                                    <div class="col-md-5 col-sm-12">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card">
                                                    <img src="/uploads/images/books/<?= $params['data']['books'][0]->image ?>" alt="" class="card-img-top">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $params['data']['books'][0]->title ?></h5>
                                                        <p class="card-text">
                                                            <?= $params['data']['books'][0]->description ?>
                                                        </p>
                                                    </div>
                                                    <div class="card-footer">
                                                        <p class="card-text">
                                                            Book Price: $<?= $params['data']['books'][0]->price ?>
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12">
                                        <div class="row">
                                            <div class="col mb-5">
                                                <div class="mb-3 ">
                                                    <h4>Book Title:</h4>
                                                    <p><?= $params['data']['books'][0]->title ?></p>
                                                    <h4>Product Price:</h4>
                                                    <p>$<?= $params['data']['books'][0]->price ?></p>
                                                </div>

                                                <h4>Product Description:</h4>
                                                <p class="text-justify">


                                                    <?= $params['data']['books'][0]->description ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <h3>Book Details</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Number Of Pages</th>
                                                            <td><?= $params['data']['books'][0]->pages_number ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Category</th>
                                                            <td><?= $params['data']['books'][0]->category ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Author</th>
                                                            <td><?= $params['data']['books'][0]->author ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Publisher</th>
                                                            <td><?= $params['data']['books'][0]->publisher ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Quantity</th>
                                                            <td><?= $params['data']['books'][0]->quantity ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Formate</th>
                                                            <td><?= $params['data']['books'][0]->format ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Status</th>
                                                            <td><?= $params['data']['books'][0]->is_active ? "Avaliable" : "Not Allowed" ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Creator</th>
                                                            <td><?= $params['data']['books'][0]->created_by ?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Creation Time</th>
                                                            <td><?= $params['data']['books'][0]->created_at?></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="row">Last Update </th>
                                                            <td><?= $params['data']['books'][0]->updated_at?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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




    <div id="deleteBook" class="modal fade deleteModal">
        <form action="/admin/deleteBook" id="deleteForm" method="post">
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
                        <p>Do you really want to delete this Book ? This process cannot be undone.</p>
                    </div>
                    <input type="hidden" name="id" value="<?= $params['data']['books'][0]->id ?>" id="deleteBookId">
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="restoreBook" class="modal fade deleteModal restoreModal">
        <form action="/admin/restoreBook" id="restoreForm" method="post">
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
                        <p>Do you really want to Restore this Book ? </p>
                    </div>
                    <input type="hidden" name="id" value="<?= $params['data']['books'][0]->id ?>" id="restoreBookId">
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Restore</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {

            $("#deleteForm").on("submit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: $("#deleteForm").attr("action"),
                    method: "DELETE",
                    data: {
                        id: $("#deleteBookId").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/book_details";
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
                        id: $("#restoreBookId").val(),
                    },
                    success: function(result) {
                        if (result) {
                            location.href = "/admin/book_details";
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