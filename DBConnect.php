<?php


class DBConnect
{
    public $username;
    public $password;
    public $linkDb;
    public $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    public function __construct()
    {
        $this->username = 'root';
        $this->password = '123456@Abc';
        $this->linkDb = "mysql:host=localhost;dbname=Thu_Vien";
    }

    public function connect()
    {
        try {
            $conn = new PDO($this->linkDb, $this->username, $this->password,$this->options);
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
        return $conn;
    }
}
