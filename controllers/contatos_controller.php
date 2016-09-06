<?php 
	class ControllerContato{
		public $nome;
		public $telefone;
		public $celular;
		public $email;
		
		public function __construct(){
			//Verifica qual metodo foi utilizado no form
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				
				//Resgata os valores digitados
				$this->nome=$_POST['txtNome'] ;
				$this->telefone=$_POST['txtTelefone'];
				$this->celular=$_POST['txtCelular'];
				$this->email=$_POST['txtEmail'];
				
				//Chama o metodo para inserir um novo registro
				$this->Novo();
			}
		}
		public function Novo(){
			
			//Intancia do model
			$contato = new Contato();
			
			//Atribui os respectivos valores adquiridos
			$contato->nome = $this->nome;
			$contato->telefone = $this->telefone;
			$contato->celular = $this->celular;
			$contato->email = $this->email;
			
			//Chama o metodo da model para inserir
			$contato::Insert($contato);
			
		}
		public function Atualizar(){

		}
		public function Excluir(){

		}
		public function Visualizar(){

		}
		public function Buscar(){

		}
	}

?>