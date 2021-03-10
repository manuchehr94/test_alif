<?php


class DBConnector
{
    private $connect;
    private static $instance;

    private function __construct()
    {
       $this->connect = mysqli_connect("localhost", "root", "", "alif");

    }

    public function connect()
    {
        return $this->connect;
    }

    public static function getInstance()
    {
        if(empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}