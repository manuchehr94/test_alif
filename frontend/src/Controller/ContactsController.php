<?php

include_once __DIR__ . "/../../../common/src/Model/Contacts.php";
include_once __DIR__ . "/../../../common/src/Model/ContactsPhoneAndEmail.php";

class ContactsController
{
    public function all()
    {
        $limit = intval($_GET['limit'] ?? Contacts::LIMIT_PER_PAGE);

        $offset = (intval($_GET['page'] ?? 1) - 1) * $limit;
        $offset = $offset < 0 ? 0 : $offset;

        $allContacts = (new Contacts())->allPerPage($limit, $offset);
        $NumberOfAllPages = (new Contacts())->getNumberPage($limit);

        include_once __DIR__ . "/../../views/site/index.php";
    }
}