<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\AUthor;
use coding\app\models\Book;
use coding\app\models\Category;
use coding\app\models\Publisher;
use coding\app\system\AppSystem;
use coding\app\system\StaticPaths;
use coding\app\system\SystemUtils;

class BooksController extends Controller
{
    public Book $book;
    public Publisher $publisher;
    public AUthor $author;
    public Category $category;


    public function __construct()
    {
        $this->book = new Book();
    }

    public function show()
    {
        $bk = $this->book->getAll('books_view');
        $this->publisher = new Publisher();
        $pub = $this->publisher->getAll();
        $this->category = new Category();
        $cate = $this->category->getAll();
        $this->author = new AUthor();
        $auth = $this->author->getAll();


        $data = [
            "categories" => $cate,
            "publishers" => $pub,
            "authors" => $auth,
            "books" => $bk
        ];
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $data, 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $data];

        $this->view(StaticPaths::ADMIN_VIEWS . '/books', $args);
    }

    public function addNew()
    {
        $this->book->title = $_POST['title'];
        $this->book->price = $_POST['price'];
        $this->book->quantity = $_POST['quantity'];
        $this->book->format = $_POST['format'];
        $this->book->pages_number = $_POST['pages_number'];
        $this->book->category_id = $_POST['category_id'];
        $this->book->author_id = $_POST['author_id'];
        $this->book->publisher_id = $_POST['publisher_id'];

        $this->book->description = $_POST['description'];

        $this->book->created_by = 1;
        $imageName = SystemUtils::uploadFile($_FILES['image'], StaticPaths::BOOKS);
        $this->book->image = $imageName != null ? $imageName : "default.png";

        if ($this->book->save())
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "New Book Added"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Add Book"];
        AppSystem::$appSystem->response->redirect("/admin/books");
    }



    public function deleteItem()
    {

        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->book->is_active = 0;
        $this->book->updated_at = "" . date("Y-m-d H:i:s", time());

        if ($this->book->update("id=" . $sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Book Deleted Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Delete Book !!!"];

        echo true;
    }

    public function restoreItem()
    {
        parse_str(file_get_contents("php://input"), $sent_vars);
        $this->book->is_active = 1;
        $this->book->updated_at = "" . date("Y-m-d H:i:s", time());

        if ($this->book->update("id=" . $sent_vars['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Book Restored Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Restore Book !!!"];

        echo true;
    }
}
