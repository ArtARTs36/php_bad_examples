<?php

interface Algorithm
{
    public function encode(string $message): string;
}

class Sha1 implements Algorithm
{
    public function encode(string $message): string
    {
        return sha1($message);
    }
}

class Md5 implements Algorithm
{
    public function encode(string $message): string
    {
        return md5($message);
    }
}

class AlgorithmFactory
{
    protected $dict = [
        'md5' => Md5::class,
        'sha1' => Sha1::class,
    ];

    public function factory(string $type): Algorithm
    {
        $class = $this->dict[$type];

        return new $class;
    }
}
