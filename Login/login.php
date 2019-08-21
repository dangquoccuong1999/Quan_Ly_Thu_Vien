<?php
include_once '../DBConnect.php';
include_once 'LoginUser.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$user = new LoginUser($username,$password);

if (!empty($username) && !empty($password)) {
    if ($user->login()) {
        $user->joinDataUser();
        include_once 'HienThiKhiDangNhapThanhCong.php';
    };
}
