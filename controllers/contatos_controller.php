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
		public function Atualizar($cod){
			//Intancia do model
			$contato = new Contato();
			
			//Atribui os respectivos valores adquiridos
			$contato->cod = $cod;
			$contato->nome = $this->nome;
			$contato->telefone = $this->telefone;
			$contato->celular = $this->celular;
			$contato->email = $this->email;
			
			//Chama o metodo da model para inserir
			$contato::Update($contato);
		}
		public function Excluir($cod){
			$contato = new Contato();
			$contato::Delete($cod);
		}
		public function Visualizar(){
			$contato = new Contato();
			return $contato->SelectAll();
		}
		public function Buscar($cod){
			$contato = new Contato();
			$list= $contato::SelectById($cod);
			
			//Instancia a index para que a varialvel list passe a existir
			require_once('index.php');
		}
	}

?>