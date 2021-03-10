<?php

include_once  __DIR__ . "/../../../common/src/Model/Contacts.php";
include_once __DIR__ . "/Interface/ControllerInterface.php";

class ContactsController implements ControllerInterface
{
    public function create()
    {
        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function read()
    {
        $allContacts = (new Contacts())->all();
        include_once __DIR__ . "/../../views/contacts/List.php";
    }

    public function save()
    {
        if(!empty($_POST)) {

            $product = new Contacts(
                                intval($_POST['id']),
                                htmlspecialchars($_POST['name']),
                                intval($_POST['phone']),
                                intval($_POST['email'])
            );

            $product->save();
        }

        return $this->read();
    }

    public function delete()
    {
        $id = (int)$_GET['id'];
        (new Contacts())->deleteById($id);
        return $this->read();
    }

    public function update()
    {
        $id = (int)$_GET['id'];

        if(empty($id)) die("Undefined id");

        $oneContact = (new Contacts())->getById($id);

        if(empty($oneContact)) die("Contact is not found");

        include_once __DIR__ . "/../../views/contacts/form.php";
    }
}