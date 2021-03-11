<?php

include_once __DIR__ . "/../Service/DBConnector.php";

class ContactsPhoneAndEmail
{
    private $conn;

    public function __construct()
    {
        $this->conn = DBConnector::getInstance()->connect();
    }

    public function phones()
    {
        $query = "SELECT contacts.name as name, contacts.phone as phone_id, phone.phone as phone
                    FROM contacts
                    JOIN phone
                     ON contacts.phone = phone.phone_id ";
        $result = mysqli_query($this->conn, $query);
        $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $itemIds = [];
        foreach ($resultArray as $item) {
            if (array_key_exists($item['name'], $itemIds)) {
                $itemIds[$item['name']][] = $item['phone'];
                continue;
            }
            $itemIds[$item['name']][] = $item['phone'];

        }

        return $itemIds;
    }

    public function emails()
    {
        $query = "SELECT contacts.name as name, contacts.email as email_id, email.email as email
                    FROM contacts
                    JOIN email
                     ON contacts.email = email.email_id ";
        $result = mysqli_query($this->conn, $query);
        $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $itemIds = [];
        foreach ($resultArray as $item) {
            if (array_key_exists($item['name'], $itemIds)) {
                $itemIds[$item['name']][] = $item['email'];
                continue;
            }
            $itemIds[$item['name']][] = $item['email'];

        }

        return $itemIds;
    }

}