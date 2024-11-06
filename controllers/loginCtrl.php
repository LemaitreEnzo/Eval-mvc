<?php
require_once 'models/Users.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new Users();

    if (isset($_POST['login'])) {
        $email = htmlspecialchars($_POST['email']);
        $user->password = htmlspecialchars($_POST['password']);
        $userData = $user->getData();


        if ($userData && password_verify($user->password, $userData['password'])) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['firstname'] = $userData['firstname'];
            $_SESSION['lastname'] = $userData['lastname'];
            header('Location: /show');
            
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
}


render('login', [
    'content' => $error
]);