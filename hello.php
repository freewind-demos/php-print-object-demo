<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

$user = new User('php');
print_r($user);

?>
