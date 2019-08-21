<?php
include_once '../DBConnect.php';

class SignUpUser
{
    public $idStudent;
    public $user;
    public $password;
    public $conn;

    public function __construct($idStudent, $user, $password)
    {
        $this->idStudent = $idStudent;
        $this->user = $user;
        $this->password = $password;

        $db = new DBconnect();
        $this->conn = $db->connect();
    }

    public function findById()
    {
        $sql = "SELECT ID_Student FROM Students WHERE ID_Student = '$this->idStudent'";
        $mysql = $this->conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $data = $mysql->fetch();
        if (!empty($data)) {
            return true;
        } else if (empty($data)) {
            return false;
        }
    }

    public function insert()
    {
        if ($this->findById()) {
            $sql = "INSERT INTO `UserStudent`(`ID_Student`, `Tai_Khoan`, `Mat_Khau`) VALUES ('$this->idStudent','$this->user','$this->password')";
            $mysql = $this->conn->query($sql);
        } else {
            header('location:SignError.php');
        }
    }
}

