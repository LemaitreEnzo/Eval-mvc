<?php

require_once 'models/Users.php';
require_once 'models/Roles.php';

$error = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new Users();
    $role = new Roles();

    if (isset($_POST['create'])) {
        // vérification du champ firstname
        if (!empty($_POST['firstname'])) {
            if (strlen($_POST['firstname']) <= 50) {
                $user->firstname = htmlspecialchars($_POST['firstname']);
            } else {
                $error['fistname'] = 'Prénom de 50 caractere max';
            }
        } else {
            $error['firstname'] = 'Prénom obligaoire';
        }

        // vérification du champ lastname
        if (!empty($_POST['lastname'])) {
            if (strlen($_POST['lastname']) <= 50) {
                $user->lastname = htmlspecialchars($_POST['lastname']);
            } else {
                $error['lastname'] = 'Nom de 50 caractere max';
            }
        } else {
            $error['lastname'] = 'Nom obligaoire';
        }

        // vérification de l'absence d'erreur
        if (empty($error)) {
            $user->email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $user->password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
            $user->id_roles = $role->getIdByName(htmlspecialchars($_POST['role']));
            // Création de la tâche
            if ($user->createUser()) {
                // Redirection vers la page index.php
                redirectTo('/index');
            } else {
                $error['global'] = 'Echec de la creation';
            }
        }
    }
}

render('createUser',[
    'error' => $error]);
