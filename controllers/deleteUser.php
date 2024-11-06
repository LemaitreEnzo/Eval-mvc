<?php 

require_once 'models/Users.php';

$user_id = null;

if (!empty($_POST['id']) && ctype_digit($_POST['id'])) {
	$user_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
}

$user = new Users();
$user->id = $user_id;

$task->deleteUser();


redirectTo('/');
exit();