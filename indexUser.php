<?php
include_once 'DBConnect.php';
include_once 'ThuVien.php';
include_once 'Students.php';

$student = new ThuVien();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Danh Sách Học Sinh Mượn Sách</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>STT</td>
        <td>Tên học sinh</td>
        <td>Tên lớp</td>
    </tr>
    <?php foreach ($student->getStudent() as $key => $obj) { ?>
        <tr>
            <td><?php echo  ++$key ?></td>
            <td><?php echo $obj->getTenStudent() ?> </td>
            <td><?php echo $obj->getTenLop() ?> </td>
        </tr>
    <?php } ?>
</table>

<a style="position: relative; top: 30px" href="indexBook.php"><button>Quay trở lại</button></a>

</body>
</html>
