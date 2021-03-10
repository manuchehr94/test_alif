<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class Phone
{
    public $id;
    public $phoneId;
    public $phone;

    private $conn;

    public function __construct(
        $id = null,
        $phoneId = null,
        $phone = null
    )
    {
        $this->conn = DBConnector::getInstance()->connect();

        $this->id = $id;
        $this->phoneId = $phoneId;
        $this->phone = $phone;
    }

    public function save()
    {
        if($this->id > 0) {

            $query = "Update phone set `phone`= '" . $this->phone . "', phone_id= " . $this->phoneId . " 
                                    where id=" . $this->id . " limit 1";

        } else {
            $query = "INSERT INTO phone (`id`, `phone_id`, `phone`) VALUES
                                        ( null,  '" . $this->phoneId . "', '" . $this->phone . "' )";
        }

        if(!$query) {
            die("Incorrect query");
        }

         mysqli_query($this->conn, $query);
    }

    public function all()
    {
        $result = mysqli_query($this->conn, "Select * from phone order by phone_id DESC");
        return  mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function deleteById($id)
    {
        $result = mysqli_query($this->conn, "delete from phone where id = $id limit 1");

        if(!$result) {
            die("Error deleting");
        }
    }

    public function getById($id)
    {
        $result = mysqli_query($this->conn, "Select * from phone where id = $id limit 1");
        $onePhone = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($onePhone);
    }

}