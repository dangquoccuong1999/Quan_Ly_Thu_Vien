<?php


class Book
{
    public $ID_Sach;
    public $ID_TheLoai;
    public $Ten_Sach;
    public $Ten_Tac_Gia;
    public $Ten_TheLoai;
    public function __construct($ID_Sach, $ID_TheLoai, $Ten_Sach, $Ten_Tac_Gia, $Ten_TheLoai)
    {
        $this->ID_Sach = $ID_Sach;
        $this->ID_TheLoai = $ID_TheLoai;
        $this->Ten_Sach = $Ten_Sach;
        $this->Ten_Tac_Gia = $Ten_Tac_Gia;
        $this->Ten_The_Loai = $Ten_TheLoai;
    }


    public function getIDSach()
    {
        return $this->ID_Sach;
    }

    public function getIDTheLoai()
    {
        return $this->ID_TheLoai;
    }


    public function getTenSach()
    {
        return $this->Ten_Sach;
    }


    public function getTenTacGia()
    {
        return $this->Ten_Tac_Gia;
    }


    public function getTenTheLoai()
    {
        return $this->Ten_The_Loai;
    }



}