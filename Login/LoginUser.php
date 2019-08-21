<?php


class LoginUser
{
    public $user;
    public $password;
    public $dataUser;
    public $conn;

    public function __construct($user, $pass)
    {
        $this->user = $user;
        $this->password = $pass;
        $db = new DBconnect();
        $this->conn = $db->connect();
    }

    public function checkUser()
    {
        $user = "SELECT Tai_Khoan FROM `UserStudent` WHERE '$this->user'=Tai_Khoan";
        $mysql = $this->conn->query($user);
        $dataUser = $mysql->fetch();
        return $dataUser['Tai_Khoan'];

    }

    public function checkLogin()
    {

        $password = "SELECT Mat_Khau FROM `UserStudent` WHERE '$this->password'=Mat_Khau";
        $mysql = $this->conn->query($password);
        $dataPass = $mysql->fetch();
        return $dataPass['Mat_Khau'];
    }

    public function login()
    {
        if ($this->user == $this->checkUser() && $this->password == $this->checkLogin()) {
            return true;
        } else {
            include_once 'DangNhapSai.php';
        }
    }

    public function joinDataUser()
    {
        //data users
        $sql = "SELECT Book.ID_Sach,Book.Ten_Sach,Book.Ten_Tac_Gia,Category.Ten_TheLoai,Students.Ten_Lop,Students.Ten_Student 
                FROM Book 
                INNER JOIN BorrowOrder ON Book.ID_Sach = BorrowOrder.ID_Sach
                INNER JOIN Students on Students.ID_Student=BorrowOrder.ID_Student
                inner join UserStudent on UserStudent.ID_Student = Students.ID_Student
                INNER JOIN Category ON Book.ID_TheLoai = Category.ID_TheLoai
                WHERE '$this->user'=UserStudent.Tai_Khoan AND '$this->password' =UserStudent.Mat_Khau";

        $mysql = $this->conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $this->dataUser = $mysql->fetch();
        return $this->dataUser;
    }
}