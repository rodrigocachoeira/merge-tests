<?php

class User
{
    private $completeName;
    private $age;
    private $name;
    private $gender;
    
    public function sayMyName() {
        return $this->completeName;
    }
    
}