<?php
require_once 'models/Blogs.php';

$task_id = null;

if (!empty($_POST['id']) && ctype_digit($_POST['id'])) {
	$task_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
}

$blog = new blogs();
$blog->id = $blog_id;

$blog->deleteBlog();


redirectTo('/show');
exit();