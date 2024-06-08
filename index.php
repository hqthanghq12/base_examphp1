<?php
//require_once 'models/ConnectDatabase.php';
//$conn = new ConnectDatabase();
require_once 'models/Book.php';
require_once 'controllers/BookController.php';
$cBook = new BookController();
$act = isset($_GET['act'])? $_GET['act'] : "/";
//echo $act;
switch ($act){
    case "addBook":
        $cBook->addBook();
        break;
    case "editBook":
        $cBook->editBook();
        break;
    case "deleteBook":
        $cBook->deleteBook();
        break;
    default:
        $cBook->listBook();
        break;
}