<?php

include_once __DIR__ . "/../Service/DBConnector.php";
include_once __DIR__ . "/../Service/ArrayFormService.php";

class Search
{
    private $conn;

    public function __construct()
    {
        $this->conn = DBConnector::getInstance()->connect();
    }

    public function searchByName($queryForSearch)
    {
        if(empty($queryForSearch)) {
            return $queryForSearch = "You have made empty search";
        }


//        $result = mysqli_query($this->conn, "Select * from contacts");
//        return  mysqli_fetch_all($result, MYSQLI_ASSOC);

//        $query = trim($query);
//        $query = htmlspecialchars($query);
//
//        if (!empty($query))
//        {
//            if (strlen($query) < 3) {
//                $text = '<p>Слишком короткий поисковый запрос.</p>';
//            } else if (strlen($query) > 128) {
//                $text = '<p>Слишком длинный поисковый запрос.</p>';
//            } else {
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
            print "query isn't working";
            die();
        }
        return ArrayFormService::formArray($arr);
    }
}