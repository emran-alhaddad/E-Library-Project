<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\adminControllers\AuthorController;
use coding\app\controllers\adminControllers\BookDetailsController;
use coding\app\controllers\adminControllers\BooksController;
use coding\app\controllers\adminControllers\CitiesController;
use coding\app\controllers\adminControllers\DashboardController;
use coding\app\controllers\adminControllers\OffersController;
use coding\app\controllers\adminControllers\OrdersController;
use coding\app\controllers\adminControllers\PaymentsController;
use coding\app\controllers\adminControllers\PublisherController;
use coding\app\controllers\adminControllers\UserManageController;
use coding\app\controllers\adminControllers\UsersController;
use coding\app\controllers\adminControllers\CategoriesController as AdminCategoriesController;
use coding\app\controllers\adminControllers\RolesController;
// ------------------------------------------------------
use coding\app\controllers\userControllers\AboutController;
use coding\app\controllers\userControllers\CategoriesController;
use coding\app\controllers\userControllers\ContactController;
use coding\app\controllers\userControllers\HelpController;
use coding\app\controllers\userControllers\HomeController;
use coding\app\controllers\userControllers\PrivacyController;
use coding\app\controllers\userControllers\ProductDetailsController;
use coding\app\controllers\userControllers\ShopBageController;
use coding\app\system\AppSystem;
use coding\app\system\Router;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = array(
  'servername' => $_ENV['DB_SERVER_NAME'],
  'dbname' => $_ENV['DB_NAME'],
  'dbpass' => $_ENV['DB_PASSWORD'],
  'username' => $_ENV['DB_USERNAME']

);
$system = new AppSystem($config);

/** web routes  */

Router::use('/', function ($req, $res) {


  // User Roots
  Router::get($res->URL . '', [HomeController::class, 'show']);
  Router::get($res->URL . 'Home', [HomeController::class, 'show']);
  Router::get($res->URL . 'Details', [ProductDetailsController::class, 'show']);
  Router::get($res->URL . 'Categories', [CategoriesController::class, 'show']);
  Router::get($res->URL . 'ShopBage', [ShopBageController::class, 'show']);
  Router::get($res->URL . 'About', [AboutController::class, 'show']);
  Router::get($res->URL . 'Contact', [ContactController::class, 'show']);
  Router::get($res->URL . 'Help', [HelpController::class, 'show']);
  Router::get($res->URL . 'Privacy', [PrivacyController::class, 'show']);
});


// Dashboard Root
Router::use('/admin/', function ($req, $res) {

  Router::get($res->URL . '', [DashboardController::class, 'show']);
  Router::get($res->URL . 'home', [DashboardController::class, 'show']);
  Router::get($res->URL . 'books', [BooksController::class, 'show']);
  Router::get($res->URL . 'book_details', [BookDetailsController::class, 'show']);
  Router::post($res->URL . 'book_details', [BookDetailsController::class, 'selectBook']);

  Router::get($res->URL . 'categories', [AdminCategoriesController::class, 'show']);
  Router::get($res->URL . 'cities', [CitiesController::class, 'show']);
  Router::get($res->URL . 'offers', [OffersController::class, 'show']);
  Router::get($res->URL . 'payments', [PaymentsController::class, 'show']);
  Router::get($res->URL . 'orders', [OrdersController::class, 'show']);
  Router::get($res->URL . 'publisher', [PublisherController::class, 'show']);
  Router::get($res->URL . 'author', [AuthorController::class, 'show']);
  Router::get($res->URL . 'userManage', [UserManageController::class, 'show']);
  Router::get($res->URL . 'users', [UsersController::class, 'show']);
  Router::get($res->URL . 'roles', [RolesController::class, 'show']);


  // POST 

  Router::post($res->URL . 'addCategory', [AdminCategoriesController::class, 'addNew']);
  Router::post($res->URL . 'addCity', [CitiesController::class, 'addNew']);
  Router::post($res->URL . 'addPayment', [PaymentsController::class, 'addNew']);
  Router::post($res->URL . 'addPublisher', [PublisherController::class, 'addNew']);
  Router::post($res->URL . 'addAuthor', [AuthorController::class, 'addNew']);
  Router::post($res->URL . 'addBook', [BooksController::class, 'addNew']);
  Router::post($res->URL . 'addRole', [RolesController::class, 'addNew']);



  Router::put($res->URL . 'editCity', [CitiesController::class, 'editItem']);
  Router::put($res->URL . 'restoreCity', [CitiesController::class, 'restoreItem']);
  Router::delete($res->URL . 'deleteCity', [CitiesController::class, 'deleteItem']);

  Router::put($res->URL . 'editRole', [RolesController::class, 'editItem']);
  Router::put($res->URL . 'restoreRole', [RolesController::class, 'restoreItem']);
  Router::delete($res->URL . 'deleteRole', [RolesController::class, 'deleteItem']);

  Router::post($res->URL . 'editPayment', [PaymentsController::class, 'editItem']);
  Router::put($res->URL . 'restorePayment', [PaymentsController::class, 'restoreItem']);
  Router::delete($res->URL . 'deletePayment', [PaymentsController::class, 'deleteItem']);
  
  Router::post($res->URL . 'editPublisher', [PublisherController::class, 'editItem']);
  Router::put($res->URL . 'restorePublisher', [PublisherController::class, 'restoreItem']);
  Router::delete($res->URL . 'deletePublisher', [PublisherController::class, 'deleteItem']);

  Router::put($res->URL . 'editAuthor', [AuthorController::class, 'editItem']);
  Router::put($res->URL . 'restoreAuthor', [AuthorController::class, 'restoreItem']);
  Router::delete($res->URL . 'deleteAuthor', [AuthorController::class, 'deleteItem']);
  
  Router::post($res->URL . 'editCategory', [AdminCategoriesController::class, 'editItem']);
  Router::put($res->URL . 'restoreCategory', [AdminCategoriesController::class, 'restoreItem']);
  Router::delete($res->URL . 'deleteCategory', [AdminCategoriesController::class, 'deleteItem']);

  Router::post($res->URL . 'editBook', [BookDetailsController::class, 'editItem']);
  Router::put($res->URL . 'restoreBook', [BooksController::class, 'restoreItem']);
  Router::delete($res->URL . 'deleteBook', [BooksController::class, 'deleteItem']);


  
});


/** end of web routes */



$system->start();
