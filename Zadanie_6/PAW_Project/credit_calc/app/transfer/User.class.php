<?php

namespace app\transfer;

class User{
    public $login;
    public $role;
    
    public function __countruct($login,$role){
        $this->login = $login;
        $this->role = $role;
    }
}

