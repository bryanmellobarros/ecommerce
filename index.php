<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Hcode\DB\Sql();

	$results = $sql->select('SELECT * FROM tb_estoque');

	echo json_encode($results);

	if (empty($results)) {
		echo "O array está vazio.";
	} else {
		echo "O array não está vazio.";
	}

});

$app->run();

 ?>