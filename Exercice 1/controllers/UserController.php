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
     public function checkCreate(): void{
        if (
        isset($_POST['email']) &&
        isset($_POST['first_name']) &&
        isset($_POST['last_name'])
    ) {

        $email = htmlspecialchars($_POST['email']);
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);


        $user = new User(null, $email, $first_name, $last_name);


        $manager = new UserManager();
        $manager->insert($user);


        header('Location: index.php');
        exit();
    } else {

        echo 'Tous les champs sont obligatoires.';
        exit();
    }
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
   public function list(): void
   {
        $manager = new UserManager();
        $users = $manager->findAll();
        $route = "templates/users/list.phtml";
        require "templates/layout.phtml";
    }
}