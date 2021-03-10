<?php

include_once  __DIR__ . "/../../../common/src/Model/Email.php";

include_once __DIR__ . "/Interface/ControllerInterface.php";

class EmailController implements ControllerInterface
{
    public function create()
    {
        include_once __DIR__ . "/../../views/emails/form.php";
    }

    public function read()
    {
        $allEmails = (new Email())->all();
        include_once __DIR__ . "/../../views/emails/List.php";
    }

    public function save()
    {
        if(!empty($_POST)) {

            $phone = new Email(  intval($_POST['id']),
                                intval($_POST['email_id']),
                                htmlspecialchars($_POST['email'])
                                );
            $phone->save();
        }

        return $this->read();
    }

    public function delete()
    {
        $id = (int)$_GET['id'];
        (new Email())->deleteById($id);
        return $this->read();
    }

    public function update()
    {
        $id = (int)$_GET['id'];

        if(empty($id)) die("Undefined id");

        $oneEmail = (new Email())->getById($id);

        if(empty($oneEmail)) die("Email is not found");

        include_once __DIR__ . "/../../views/emails/form.php";
    }
}