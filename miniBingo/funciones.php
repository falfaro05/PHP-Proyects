<?php

	function validar(){

		$completo = true;

		for($i = 1; $i < 7; $i++){

			if(empty($_POST["valor".$i]) || !is_numeric($_POST["valor".$i]) || $_POST["valor".$i] < 1 || $_POST["valor".$i] > 20){

				$completo = false;
			}
		}

		return $completo;
	}


	function numerosUsuario(){

		$nUsuarios = array();

		for ($i=1; $i < 7; $i++) { 
			
			$nUsuarios[$i] = $_POST["valor".$i];
		}

		return $nUsuarios;
	}


	function numerosMaquina(){

		$nMaquina = array();

		for ($i=1; $i < 7; $i++) { 
			
			do{

			$aleatorio = rand(1,20);

		}while(in_array($aleatorio, $nMaquina));

			$nMaquina[$i] = $aleatorio; 
		}

		return $nMaquina;
	}

	function numerosCoinciden($matriz1, $matriz2){

		$coinciden = 0;

		for ($i=1; $i < 7; $i++) { 
			
			if (in_array($matriz1[$i], $matriz2)) {
				
				$coinciden ++;
			}
		}

		return $coinciden;
	}

?>