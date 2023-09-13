<?php
class Customer
{
    public $email;
    public $name;
    public $password;
    public $is_active;

    function __construct($email, $name, $password, $is_active)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
        $this->is_active = $is_active;
    }
}
