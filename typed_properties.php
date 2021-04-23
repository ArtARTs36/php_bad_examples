<?php

class People
{
    public string $name = 'Dev';

    public string $family;
}

$people = new People();

echo $people->family;
