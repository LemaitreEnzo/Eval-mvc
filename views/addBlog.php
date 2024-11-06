<?php

// Affichage du formulaire dans
ob_start();

// Affichage de l'erreur globale
if (!empty($data['error'])) { ?>
<h2><?= $data['error'] ?></h2>
<?php }

render('default', [
	'content' => $content,
], true);