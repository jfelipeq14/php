<?php

require_once("./class/formUser.php");
$form = new FormUser();

$form->setData("identity", $_POST["identity"]);
$form->setData("name", $_POST["name"]);
$form->setData("lastName", $_POST["lastName"]);
$form->setData("email", $_POST["email"]);

echo json_encode($form->getData());
