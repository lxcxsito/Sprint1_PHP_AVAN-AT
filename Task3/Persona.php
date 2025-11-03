<?php
class Person
{
    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function __toString()
    {
        return "Hola, sóc " . $this->username;
    }
}



?>