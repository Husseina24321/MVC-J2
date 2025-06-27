<?php
class UserController {

    public function list(): void {
        $manager = new UserManager();
        $users = $manager->findAll();
        $route = "templates/users/list.phtml";
        require "templates/layout.phtml";
    }

    public function create(): void {
        $route = "templates/users/create.phtml";
        require "templates/layout.phtml";
    }

    public function checkCreate(): void {
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

    public function show(int $id): void {
        $manager = new UserManager();
        $user = $manager->findOneById($id);

        if (!$user) {
            echo "Utilisateur introuvable.";
            exit();
        }

        $route = "templates/users/show.phtml";
        require "templates/layout.phtml";
    }

    public function update(): void {
    if (!isset($_GET['id'])) {
        echo "ID utilisateur manquant.";
        return;
    }

    $id = (int) $_GET['id'];
    $manager = new UserManager();
    $user = $manager->findOneById($id);

    if (!$user) {
        echo "Utilisateur introuvable.";
        return;
    }
    $route = "templates/users/update.phtml";
    require "templates/layout.phtml";
}

    public function checkUpdate(): void {
    if (!isset($_GET['id'])) {
        echo "ID manquant.";
        return;
    }

    $id = (int) $_GET['id'];

    if (
        !empty($_POST['email']) &&
        !empty($_POST['first_name']) &&
        !empty($_POST['last_name'])
    ) {
        $email = htmlspecialchars($_POST['email']);
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);

        $user = new User($id, $email, $first_name, $last_name);

        $manager = new UserManager();
        $manager->update($user);

        header('Location: index.php');
        exit;
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}

    public function delete(int $id): void {
        $manager = new UserManager();
        $manager->delete($id);

        header('Location: index.php');
        exit();
    }
}