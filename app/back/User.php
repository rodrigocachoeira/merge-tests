<?php

class User
{
    private $completeName;
    private $age;
    
    public function sayMyName() {
        return $this->completeName;
    }
}