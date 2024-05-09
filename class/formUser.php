<?php

class FormUser
{
    private $data = array();
    public function setData($input, $value)
    {
        $this->data[$input] = $value;
    }
    public function getData()
    {
        return $this->data;
    }
}
