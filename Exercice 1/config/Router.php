<?php
 class Router{
     public function handleRequest($route){
         switch ($route){
             case 'show_user':
                 // UserController:: show()
                 break;
             case 'create_user':
                 // UserController:: create()
                 break;
             case 'check_create_user':
                 // UserController:: checkCreate()
                 break;
            case 'update_user':
                 // UserController:: update()
                 break;
            case 'check_update_user':
                 // UserController:: checkUpdate()
                 break;
            case 'delete_user':
                 // UserController:: delete()
                 break;
            default:
                 // UserController::list()
                 break;
         }
         
     }
 }
