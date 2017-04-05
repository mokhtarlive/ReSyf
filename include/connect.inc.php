<?php
	// Script de connexion à la base
	$connect=new mysqli(HOST,USER,PASS,BASE);
	$connectError=1;
	if ($connect->connect_error) {
		$message= "La connexion au serveur a échoué : ".$connect->connect_error;
		$messageClass="alert-danger";
		$messageDisplay="block";
		$connectError=0;
	}
	// pour que les requêtes soient interprétées en UTF8
	$connect->query("SET CHARACTER 'UTF8'");
	// pour que les réponses aux requêtes soient interprétées en UTF8
	$connect->query("SET character_set_results = 'utf8', character_set_client = 'utf8' ");
?>
