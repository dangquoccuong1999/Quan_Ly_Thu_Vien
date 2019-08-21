<?php
include_once 'DBConnect.php';
include_once 'ThuVien.php';
include_once 'Book.php';

$book = new ThuVien();
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
<h1>Thư Viện Sách</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>STT</td>
        <td>Tên sách</td>
        <td>Tên tác giả</td>
        <td>Thể loại</td>
        <td>Delete</td>
        <td>User</td>
    </tr>
    <?php foreach ($book->getBook() as $key => $obj) { ?>
        <tr>
            <td><?php echo  ++$key ?></td>
            <td><?php echo $obj->getTenSach() ?> </td>
            <td><?php echo $obj->getTenTacGia() ?> </td>
            <td><?php echo $obj->getTenTheLoai()?> </td>
            <td><a href="deleteBook.php?id=<?php echo $obj->getIDSach()?>"><button>Delete</button></a></td>
            <td><a href="indexUser.php"><button>Xem</button></a></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
