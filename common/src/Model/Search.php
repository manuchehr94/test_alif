<?php

include_once __DIR__ . "/../Service/DBConnector.php";
include_once __DIR__ . "/../Service/HelperService.php";

class Search
{
    private $conn;

    public function __construct()
    {
        $this->conn = DBConnector::getInstance()->connect();
    }

    public function searchByName($queryForSearch)
    {
        $preparedQuery = HelperService::checkQuery($queryForSearch);

        if(strpos($preparedQuery, 'Please make a correct search')) {
            return $preparedQuery;
        }

        $queryForBD = "SELECT 
                            contacts.name as name, 
                            phone.phone as phone, 
                            email.email as email 
                        FROM contacts 
                        LEFT JOIN phone 
                        ON 
                        contacts.phone = phone.phone_id 
                        LEFT JOIN email 
                        ON 
                        contacts.email = email.email_id
                         WHERE MATCH (contacts.name) AGAINST ('$queryForSearch') OR
                         MATCH (phone.phone) AGAINST ('$queryForSearch') OR
                         MATCH (email.email) AGAINST ('$queryForSearch')";


        $result = mysqli_query($this->conn, $queryForBD);
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if(!$result) {
            print "Query isn't correct";
            die();
        }
        return HelperService::formArray($arr, 'name', 'phone', 'email');
    }
}