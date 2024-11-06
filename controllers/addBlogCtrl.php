<?php 

require_once 'models/Tasks.php';
require_once 'models/Categories.php';

$newBlog = new Blogs();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_blog'])) {
        $name = $_POST['blog-name'];
        
        $newBlog -> create();
        header('Location: /show');
        exit();
    }
}

$blog = $data['blog'];


render('addBlog', [
	'error' => $error,
]);