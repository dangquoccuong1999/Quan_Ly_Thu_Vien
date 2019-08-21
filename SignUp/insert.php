<?php
include_once '../DBConnect.php';
include_once 'SignUpUser.php';
$id = $_REQUEST['id'];
$userName = $_REQUEST['user'];
$pass = $_REQUEST['password'];

if (!empty($id) && !empty($userName) && !empty($pass)) {
    $user = new SignUpUser($id, $userName, $pass);
    $user->insert();
}