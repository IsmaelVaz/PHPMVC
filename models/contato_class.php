<?php 

	class Contato{
		
		public $cod;
		public $nome;
		public $telefone;
		public $celular;
		public $email;
		
		public function __construct(){
			require_once("db_class.php");
			
			$conexao = new mysql_db();
			
			$conexao->conectar();
		}
		public function Insert($contato){
			
			//String de SQL passando o dados que chegaram na variavel contato
			$sql = "insert into tblcontatos(nome, telefone, celular, email) values ('".$contato->nome."', '".$contato->telefone."', '".$contato->celular."', '".$contato->email."')";
			
			mysql_query($sql);
		}
		public function Update(){
			
		}
		public function Delete(){
			
		}
		public function SelectAll(){
			
		}
		public function SelectById(){
			
		}
	}

?>