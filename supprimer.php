<?php

require_once 'include/connexion.php';
$opt = ['options' => ['min_range' => 1]];

$id_file = filter_input(INPUT_GET, 'id_file', FILTER_VALIDATE_INT, $opt);

if ($id_file) {
	$q = "DELETE FROM files WHERE id_file={$id_file};";
    $req = $db->prepare($q);
	$req->execute();
	/*
	@unlink("img/prod_{$id_produit}_v.jpg");
	@unlink("img/prod_{$id_produit}_p.jpg");
	*/
}

