<?php
	require __DIR__.'/vendor/autoload.php';
	use \App\validar\CPF;
	$g = $argv[1];
	$resultado = CPF::validar($g);
	var_dump($resultado);
?>