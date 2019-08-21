<?php


class BorrowOrder
{
    public $ID_PhieuMuon;
    public $ID_Student;
    public $ID_Sach;
    public $Ho_Ten_Nguoi_Muon;
    public $NgayMuon;
    public $NgayTra;

    public $conn;

    public function __construct($ID_PhieuMuon, $ID_Student, $ID_Sach, $Ho_Ten_Nguoi_Muon, $NgayMuon, $NgayTra)
    {
        $this->ID_PhieuMuon = $ID_PhieuMuon;
        $this->ID_Student = $ID_Student;
        $this->ID_Sach = $ID_Sach;
        $this->Ho_Ten_Nguoi_Muon = $Ho_Ten_Nguoi_Muon;
        $this->NgayMuon = $NgayMuon;
        $this->NgayTra = $NgayTra;

        $db = new DBconnect();
        $this->conn = $db->connect();
    }


    public function getIDSach()
    {
        return $this->ID_Sach;
    }


    public function getHoTenNguoiMuon()
    {
        return $this->Ho_Ten_Nguoi_Muon;
    }


    public function getIDPhieuMuon()
    {
        return $this->ID_PhieuMuon;
    }


    public function getIDStudent()
    {
        return $this->ID_Student;
    }


    public function getNgayMuon()
    {
        return $this->NgayMuon;
    }


    public function getNgayTra()
    {
        return $this->NgayTra;
    }
}
