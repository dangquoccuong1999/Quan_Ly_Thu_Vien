<?php


class ThuVien
{
    public $conn;

    public function __construct()
    {
        $db = new DBconnect();
        $this->conn = $db->connect();

    }

    public function getBook()
    {
        $sql = "SELECT Book.ID_Sach, Book.ID_TheLoai, Book.Ten_Sach, Book.Ten_Tac_Gia, Category.Ten_TheLoai 
                FROM Book INNER JOIN Category ON Book.ID_TheLoai= Category.ID_TheLoai";
        $mysql = $this->conn->query($sql);
        $data = $mysql->fetchAll();
        $arr = [];
        foreach ($data as $obj) {
            $book = new Book($obj['ID_Sach'], $obj['ID_TheLoai'], $obj['Ten_Sach'], $obj['Ten_Tac_Gia'], $obj['Ten_TheLoai']);
            array_push($arr, $book);
        }
        return $arr;
    }

    public function getStudent()
    {
        $sql = "select * from Students";
        $mysql = $this->conn->query($sql);
        $data = $mysql->fetchAll();

        $arr = [];
        foreach ($data as $obj) {
            $student = new Students($obj['ID_Student'], $obj['Ten_Student'], $obj['Ten_Lop']);
            array_push($arr, $student);
        }
        return $arr;
    }


    public function deleteBook($idSach)
    {
        $this->deletePhieuMuon($idSach);
        $sql = "DELETE FROM Book WHERE ID_Sach = '$idSach' ";
        $mysql = $this->conn->query($sql);
    }


    public function deletePhieuMuon($idSach)
    {
        $idPhieuMuon = $this->getIDPhieuMuon($idSach);
        $sql = "DELETE FROM BorrowOrder WHERE ID_PhieuMuon = '$idPhieuMuon'";
        $mysql = $this->conn->query($sql);
    }

    public function getIDPhieuMuon($idSach)
    {
        $sql = "SELECT ID_PhieuMuon FROM BorrowOrder n , Book m WHERE n.ID_Sach = m.ID_Sach AND n.ID_Sach= '$idSach'";
        $mysql = $this->conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $data = $mysql->fetchAll();
        return $data[0]['ID_PhieuMuon'];
    }
}


