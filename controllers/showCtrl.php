<?php
require 'models/Users.php';
require 'models/Blogs.php';


$user = new Users();
$blog = new Blogs();

$blog->id_users = $_SESSION;

render('index', [
	'blogs' => $blog->getAll(),
]);