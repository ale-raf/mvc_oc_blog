<?php $title = htmlspecialchars($post['title']) ?>

<?php ob_start(); ?>
<h1>Le super blog de l'AVBN !</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>