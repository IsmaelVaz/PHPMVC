<?php
	//Resgata o nome da variavel que foi acionada no formulario de cadastro
	$controller = $_GET['controller'];
	$modo = $_GET['modo'];
	
	//Verifica qual assunto devemos trabalhar
	switch ($controller){
		//Se for contatos, inclui os aquivos da controller e da model referente ao contato
		case 'contatos':
			require_once("controllers/contatos_controller.php");
			require_once("models/contato_class.php");
			switch ($modo){
				case 'novo':
				
					//Realizando instancia do objeto da controller
					$controller_local = new ControllerContato();
				case 'atualizar':
			}
			break;
	}

?>