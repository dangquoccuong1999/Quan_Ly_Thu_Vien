<?php


class Category
{
    public $ID_TheLoai;
    public $Ten_TheLoai;

    public function __construct($ID_TheLoai, $Ten_TheLoai)
    {
        $this->ID_TheLoai = $ID_TheLoai;
        $this->Ten_TheLoai = $Ten_TheLoai;
    }

    public function getIDTheLoai()
    {
        return $this->ID_TheLoai;
    }


    public function getTenTheLoai()
    {
        return $this->Ten_TheLoai;
    }


}