<?php

include_once __DIR__ . "/../../../common/src/Model/Contacts.php";

class ContactsController
{
    public function all()
    {
        $allContacts = (new Contacts())->all();

        include_once __DIR__ . "/../../views/site/index.php";
    }
}