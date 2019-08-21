<?php
include_once 'DBConnect.php';
include_once 'ThuVien.php';
include_once 'Book.php';

$idSach = $_GET['id'];

$objs = new ThuVien();

$objs->deleteBook($idSach);

header('Location: indexBook.php');
