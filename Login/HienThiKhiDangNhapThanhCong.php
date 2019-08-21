<?php
include_once 'DBConnect.php';
include_once 'ThuVien.php';
$data = $user->dataUser;
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
          crossorigin="anonymous">
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID_Sach</th>
        <th scope="col">Ten_Sach</th>
        <th scope="col">Ten_Tac_Gia</th>
        <th scope="col">Ten_TheLoai</th>
        <th scope="col">Ten_Lop</th>
        <th scope="col">Ten_Student</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="col"><?php echo $data['ID_Sach'] ?></th>
        <th scope="col"><?php echo $data['Ten_Sach'] ?></th>
        <th scope="col"><?php echo $data['Ten_Tac_Gia'] ?></th>
        <th scope="col"><?php echo $data['Ten_TheLoai'] ?></th>
        <th scope="col"><?php echo $data['Ten_Lop'] ?></th>
        <th scope="col"><?php echo $data['Ten_Student'] ?></th>
    </tr>
    </tbody>
</table>
</body>
</html>
