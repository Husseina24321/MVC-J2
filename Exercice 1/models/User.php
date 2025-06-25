<?php
class User{
    private $id;
    private $email;
    private $first_name;
    private $last_name;
    public function __construct(){}
    
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getFirstName() {
        return $this->first_name;
    }
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }
}