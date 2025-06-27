<?php
 class Router {
    public function handleRequest($route) {
        $controller = new UserController();

        switch ($route) {
            case 'show_user':
                if (isset($_GET['id'])) {
                    $controller->show((int) $_GET['id']);
                } else {
                    echo "ID manquant pour afficher l'utilisateur.";
                }
                break;

            case 'create_user':
                $controller->create();
                break;

            case 'check_create_user':
                $controller->checkCreate();
                break;

            case 'update_user':
                if (isset($_GET['id'])) {
                    $controller->update((int) $_GET['id']);
                } else {
                    echo "ID manquant pour modifier l'utilisateur.";
                }
                break;

            case 'check_update_user':
                $controller->checkUpdate();
                break;

            case 'delete_user':
                if (isset($_GET['id'])) {
                    $controller->delete((int) $_GET['id']);
                } else {
                    echo "ID manquant pour supprimer l'utilisateur.";
                }
                break;

            default:
                $controller->list();
                break;
        }
    }
}