<?php


class Students
{
    public $ID_Student;
    public $Ten_Student;
    public $Ten_Lop;

    public function __construct($ID_Student, $Ten_Student, $Ten_Lop)
    {
        $this->ID_Student = $ID_Student;
        $this->Ten_Student = $Ten_Student;
        $this->Ten_Lop = $Ten_Lop;
    }

    public function getIDStudent()
    {
        return $this->ID_Student;
    }

    public function getTenLop()
    {
        return $this->Ten_Lop;
    }

    public function getTenStudent()
    {
        return $this->Ten_Student;
    }

}