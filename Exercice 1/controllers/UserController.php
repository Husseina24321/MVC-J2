<?php
class UserController{
    public function create(){
        $route = "templates/users/create.phtml";
        require "templates/layout.phtml";
    }
    public function show(){
        $route = "templates/users/show.phtml";
        require "templates/layout.phtml";
    }
     public function checkCreate(){
        echo "creation de l'utilisateur";
    }
    public function update(){
        $route = "templates/users/update.phtml";
        require "templates/layout.phtml";
    }
    public function checkUpdate(){
        echo "modification de l'utilisateur";
    }
    public function delete(){
        echo "suppression de l'utilisateur";
    }
   public function list(){
        $route = "templates/users/list.phtml";
        require "templates/layout.phtml";
    }
}