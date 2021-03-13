<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class Contacts
{
    const LIMIT_PER_PAGE = 6;

    private $conn;

    public function __construct()
    {
        $this->conn = DBConnector::getInstance()->connect();
    }

    public function allPerPage($limit = self::LIMIT_PER_PAGE, $offset = 0)
    {
        $query = "SELECT 
                           c.id AS id, 
                           c.name AS name, 
                           phone.phone AS phone, 
                           email.email AS email 
                    FROM (SELECT id, name, phone, email FROM contacts LIMIT $offset, $limit) AS c 
                    LEFT JOIN phone 
                           ON c.phone = phone.phone_id 
                    LEFT JOIN email 
                           ON c.email = email.email_id";


        $resultArr = mysqli_query($this->conn, $query);

        $itemIds = [];
        foreach ($resultArr as $item) {
            if(empty($itemIds[$item['name']])) {
                $itemIds[$item['name']]['phone'] = [];
                $itemIds[$item['name']]['email'] = [];
            }

            if(!in_array($item['phone'], $itemIds[$item['name']]['phone']) ) {
                $itemIds[$item['name']]['phone'][] = $item['phone'];
            }

            if(!in_array($item['email'], $itemIds[$item['name']]['email']) ) {
                $itemIds[$item['name']]['email'][] = $item['email'];
            }

        }

        return $itemIds;
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