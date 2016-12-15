<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "\PrototypeCam\controller\userController.php";

$userController = new UserController();

$allUsers = $userController->selectAllUsers();

print_r ($allUsers);