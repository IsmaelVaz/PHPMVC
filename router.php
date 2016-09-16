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
					$controller_local->Novo();
					break;
				case 'atualizar':
					$codigo = $_GET['codigo'];
					$controller_local = new ControllerContato();
					$controller_local::Buscar($codigo);
					break;
				case 'excluir':
					$codigo = $_GET['codigo'];
					$controller_local = new ControllerContato();
					$controller_local::Excluir($codigo);
					break;
					
				case 'svatualizar':
					//Realizando instancia do objeto da controller
					//Passa o código pegado da URL para o metodo Atualizar
					$codigo = $_GET['codigo'];
					$controller_local = new ControllerContato();
					$controller_local->Atualizar($codigo);
					break;
			}
			break;
	}

?>