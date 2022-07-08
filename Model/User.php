<?php
declare(strict_types=1);

class User
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    //protected function getAllUsers(){
        //$sql = "SELECT * FROM ";
        //$result = $this->connect()->query($sql);
    //}

    public function getName() : string
    {
        return $this->name;
    }

}