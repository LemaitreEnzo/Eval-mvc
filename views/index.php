<?php

// on capture le contenu du template index et on l'envoie dans la variable $content
ob_start();

render('show', [
	'blogs' => $data['blogs'],
], true);

$content = ob_get_clean();

render('default', [
	'blogs' => $data['blogs'],
	'content' => $content
], true);