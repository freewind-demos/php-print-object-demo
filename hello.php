<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        print("Hello, " . $this->name);
    }
}

$user = new User('php');
$user->hello();

?>
