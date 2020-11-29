<?php

require 'rb.php';

		R::setup( 'mysql:host=localhost;dbname=login', 'root', 'root' );

		$nome = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);
	 
		$dados = R::dispense( 'dados' );
			
			$dados->nome = $nome;
			$dados->email = $email;
			
		$id = R::store( $dados );

		echo"Sucesso no login";
			 
	
	 
	?>
