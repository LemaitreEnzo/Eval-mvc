<?php 

ob_start();

// Affichage de l'erreur globale
if (!empty($data['error']['global'])) { ?>
    <h2><?= $data['error']['global'] ?></h2>
<?php }

$content = ob_get_clean();

render('createUser', [
	'content' => $content,
], true);