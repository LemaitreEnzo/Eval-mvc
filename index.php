<?php
// FICHIER ROUTER
// Ce fichier permet de gérer les différentes routes de l'application.

// Il permet également d'importer des fichiers ou de faires des actions avant d'appeler la route approprié.

// Require utils.php permet que les fonctions présentes dans ce fichier soit accessible partout dans le projet, peut importe la route contacter
require 'utils/utils.php';

session_start();

switch ($_SERVER['REDIRECT_URL']) {
    case '/':
        require 'controllers/loginCtrl.php';
        break;
    case '/show':
        require 'controllers/showCtrl.php';
        break;
    case '/delete-blog':
        require 'controllers/delete-blogCtrl.php';
        break;
    case '/addMessage':
        require 'controllers/addMessageCtrl.php';
        break;
    case '/createUser':
        require 'controllers/createUserCtrl.php';
        break;
    case '/add-blog':
        require 'controllers/createBlogCtrl.php';
        break;
    default:
    // Si la route ne correspond à aucun possibilité, affiche la page 404
        require 'controllers/404Ctrl.php';
        break;
}
