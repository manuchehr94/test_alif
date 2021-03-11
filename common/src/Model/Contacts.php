<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class Contacts
{
    const LIMIT_PER_PAGE = 6;

    public $id;
    public $name;
    public $phone;
    public $email;

    private $conn;

    public function __construct(
        $id = null,
        $name = null,
        $phone = null,
        $email = null
    )
    {
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function save()
    {
        if($this->id > 0) {

            $query = "Update contacts set 
                                        `name`='" . $this->name . "', 
                                        `phone`='" . $this->phone . "', 
                                        `email`='" . $this->email . "'
                                         where id=" . $this->id . " limit 1";

        } else {
            $query = "INSERT INTO contacts (`id`, `name`, `phone`, `email`) VALUES (
                                            null, 
                                            '" . $this->name . "', 
                                            '" . $this->phone . "', 
                                            '" . $this->email . "'
            )";
        }

         mysqli_query($this->conn, $query);
    }

    public function allPerPage($limit = self::LIMIT_PER_PAGE, $offset = 0)
    {
        $result = mysqli_query($this->conn, "Select * from contacts limit $offset, $limit");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function all()
    {
        $result = mysqli_query($this->conn, "Select * from contacts");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function deleteById($id)
    {
        $result = mysqli_query($this->conn, "delete from contacts where id = $id limit 1");

        if(!$result) {
            die("Error deleting");
        }
    }

    public function getById($id)
    {
        $result = mysqli_query($this->conn, "Select * from contacts where id = $id limit 1");
        $oneContact = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($oneContact);
    }

    public function getNumberPage($limit = self::LIMIT_PER_PAGE)
    {
        $query = mysqli_query($this->conn, "Select count(*) from contacts");
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $result = reset($result);
        $result = reset($result);

        return $result / $limit !== 0 ? ceil($result / $limit) : $result / $limit;
    }

}