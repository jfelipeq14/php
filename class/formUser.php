<?php

class FormUser
{

    public function __construct(public $identity, public $name, public $lastName, public $email)
    {
    }
}

class Customer extends FormUser
{
    public function message()
    {
        return "Usuario con identificación {$this->identity}, de nombre {$this->name} {$this->lastName} y correo {$this->email}";
    }
}

$identity = $_POST["identity"];
$name = $_POST["name"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

$form = new Customer($identity, $name, $lastName, $email);

echo $form->message();
