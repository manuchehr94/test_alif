<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class Email
{
    public $id;
    public $emailId;
    public $email;

    private $conn;

    public function __construct(
        $id = null,
        $emailId = null,
        $email = null
    )
    {
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->emailId = $emailId;
        $this->email = $email;
    }

    public function save()
    {
        if($this->id > 0) {

            $query = "Update email set `email`= '" . $this->email . "', email_id= " . $this->emailId . " 
                                    where id=" . $this->id . " limit 1";

        } else {
            $query = "INSERT INTO email (`id`, `email_id`, `email`) VALUES
                                        ( null,  '" . $this->emailId . "', '" . $this->email . "' )";
        }

        if(!$query) {
            die("Incorrect query");
        }

         mysqli_query($this->conn, $query);
    }

    public function all()
    {
        $result = mysqli_query($this->conn, "Select * from email order by email_id DESC");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function deleteById($id)
    {
        $result = mysqli_query($this->conn, "delete from email where id = $id limit 1");

        if(!$result) {
            die("Error deleting");
        }
    }

    public function getById($id)
    {
        $result = mysqli_query($this->conn, "Select * from email where id = $id limit 1");
        $oneEmail = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($oneEmail);
    }

}