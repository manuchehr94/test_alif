<?php

include_once  __DIR__ . "/../../../common/src/Model/Phone.php";

include_once __DIR__ . "/Interface/ControllerInterface.php";

class PhoneController implements ControllerInterface
{
    public function create()
    {
        include_once __DIR__ . "/../../views/phones/form.php";
    }

    public function read()
    {
        $allPhones = (new Phone())->all();
        include_once __DIR__ . "/../../views/phones/List.php";
    }

    public function save()
    {
        if(!empty($_POST)) {

            $phone = new Phone(  intval($_POST['id']),
                                intval($_POST['phone_id']),
                                htmlspecialchars($_POST['phone'])
                                );
            $phone->save();
        }

        return $this->read();
    }

    public function delete()
    {
        $id = (int)$_GET['id'];
        (new Phone())->deleteById($id);
        return $this->read();
    }

    public function update()
    {
        $id = (int)$_GET['id'];

        if(empty($id)) die("Undefined id");

        $onePhone = (new Phone())->getById($id);

        if(empty($onePhone)) die("Phone is not found");

        include_once __DIR__ . "/../../views/phones/form.php";
    }
}