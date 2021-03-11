<?php

include_once __DIR__ . "/../../../common/src/Model/Contacts.php";
include_once __DIR__ . "/../../../common/src/Model/ContactsPhone.php";

class ContactsController
{
    public function all()
    {
        $allContacts = (new Contacts())->all();
        $allPhones = (new ContactsPhoneAndEmail())->phones();
        $allEmails = (new ContactsPhoneAndEmail())->emails();

        include_once __DIR__ . "/../../views/site/index.php";
    }
}