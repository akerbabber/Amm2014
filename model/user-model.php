<?php

class user {
    private $username;
    private $password;
    public function setUser ($username,$password) {
        $this->username=$username;
        $this->password=$password;
    }
    public function getUsername () {
        return $this->username;
    }
    public function getPassword () {
        return $this->password;
    }

    public function getRuolo () {
        return "user";
    }


}
class admin extends user {
    public function getRuolo () {
        return "admin";
    }
}