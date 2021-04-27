<?php

class User
{
    public $name = 'Test';

    private $email = 'test@mail.ru';

    public function __get($name)
    {
        return $this->$name;
    }
}

$user = new User();

var_dump($user->email);
var_dump($user->__get('email'));