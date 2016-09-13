<?php 
	class ControllerContato{
		public $nome;
		public $telefone;
		public $celular;
		public $email;
		
		public function __construct(){
			//Verifica qual metodo foi utilizado no form
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				if($_POST['btnSalvar'] = 'SALVAR'){
					//Resgata os valores digitados
					$this->nome=$_POST['txtNome'] ;
					$this->telefone=$_POST['txtTelefone'];
					$this->celular=$_POST['txtCelular'];
					$this->email=$_POST['txtEmail'];
					
					//Chama o metodo para inserir um novo registro
					$this->Novo();
				}elseif($_POST['btnSalvar'] = 'ATUALIZAR'){
					//Resgata os valores digitados
					$this->nome=$_POST['txtNome'] ;
					$this->telefone=$_POST['txtTelefone'];
					$this->celular=$_POST['txtCelular'];
					$this->email=$_POST['txtEmail'];
					
					//Chama o metodo para inserir um novo registro
					$this->Atualizar();
				}
				
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
			//Intancia do model
			$contato = new Contato();
			
			//Atribui os respectivos valores adquiridos
			$contato->cod = $_SESSION['cod'];
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
			require_once('index.php');
		}
	}

?>