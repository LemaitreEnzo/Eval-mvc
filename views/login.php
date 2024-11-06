<?php 
ob_start();

?>

<body>
    <?php if (!empty($message)) : ?>
        <p style="color: red;"><?= $message ?></p>
    <?php endif; ?>
</body>


<?php  
$content = ob_get_clean();

render('login',
[
	'content' => $content
],true);

?>