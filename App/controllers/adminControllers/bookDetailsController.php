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

class BookDetailsController extends Controller
{
    public Book $book;
    public Publisher $publisher;
    public AUthor $author;
    public Category $category;

    public function __construct()
    {
        $this->book = new Book();
    }
    public function selectBook()
    {
        $_SESSION['bookID'] = $_POST['id'];
    }

    public function show()
    {
        $bk = $this->book->getSingle("id=" . $_SESSION['bookID'],'books_view');
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

        $this->view(StaticPaths::ADMIN_VIEWS . '/book_details', $args);
    }

    public function editItem()
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
        $this->book->created_by = 2;
        $this->book->updated_at = "" . date("Y-m-d H:i:s", time());

        if (isset($_FILES['image']) &! empty($_FILES['image']['tmp_name'])) {
            $oldImage = $this->book->getSingle("id=" . $_POST['id'])[0]->image;
            $this->book->image = SystemUtils::uploadFile($_FILES['image'], StaticPaths::BOOKS, $oldImage);
        }


        if ($this->book->update("id=" . $_POST['id']))
            $_SESSION['alert'] = ['type' => 'success', 'msg' => "Book Updated Successfully"];
        else
            $_SESSION['alert'] = ['type' => 'danger', 'msg' => "Cannot Update Book !!!"];

            AppSystem::$appSystem->response->redirect('/admin/book_details');

    }
}
