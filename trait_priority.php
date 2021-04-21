<?php

trait UserTrait
{
    public function getName(): string
    {
        return 'Сергей';
    }
}

class User
{
    use UserTrait;

    public function getName(): string
    {
        return 'Артем';
    }
}
