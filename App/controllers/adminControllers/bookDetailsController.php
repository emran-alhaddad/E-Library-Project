<?php

namespace coding\app\controllers\adminControllers;

use coding\app\controllers\Controller;
use coding\app\models\Book;
use coding\app\system\StaticPaths;

class BookDetailsController extends Controller
{
    public Book $book;

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
        $data = $this->book->getSingle("id=" . $_SESSION['bookID'],'books_view');
        $args = array();
        if (isset($_SESSION['alert'])) {
            $args = ['data' => $data, 'alert' => $_SESSION['alert']];
            unset($_SESSION['alert']);
        } else
            $args = ['data' => $data];

        $this->view(StaticPaths::ADMIN_VIEWS . '/book_details', $args);
    }
}
