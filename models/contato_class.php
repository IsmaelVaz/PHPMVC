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
			
			if(mysql_query($sql)){
				header("location:index.php");
			}else{
				echo "<b>Erro: </b><br/>".mysql_error();
			}
		}
		public function Update($contato){
			$sql = "update tblcontatos set nome='".$contato->nome."' , telefone='".$contato->telefone."' , celular='".$contato->celular."' , email='".$contato->email."' where codigo=".$contato->cod.";";
			if(mysql_query($sql)){
				header("location:index.php");
			}else{
				echo "<b>Erro: </b><br/>".mysql_error();
			}
		}
		public function Delete($cod){
			$sql = "delete from tblcontatos where codigo = ".$cod;
			
			if(mysql_query($sql)){
				header("location:index.php");
			}else{
				echo "<b>Erro: </b><br/>".mysql_error();
			}
		}
		public function SelectAll(){
			$sql = "select * from tblcontatos order by codigo desc;";
			
			$query = mysql_query($sql);

			$cont = 0;
			if(mysql_num_rows($query)>0){
				while($rs = mysql_fetch_array($query)){
					$listContato[] = new Contato();
					
					$listContato[$cont] -> cod = $rs['codigo'];
					$listContato[$cont] -> nome = $rs['nome'];
					$listContato[$cont] -> telefone = $rs['telefone'];
					$listContato[$cont] -> celular = $rs['celular'];
					$listContato[$cont] -> email = $rs['email'];
					
					$cont++;
				}
				return $listContato;
			}else{
				$listContato[] = new Contato();
				
				$listContato[0] -> cod = '';
				$listContato[0] -> nome = '-0-';
				$listContato[0] -> telefone = '-0-';
				$listContato[0] -> celular = '-0-';
				$listContato[0] -> email = '-0-';
				
				return $listContato;
			}
		}
		public function SelectById($cod){
			$sql = "select * from tblcontatos where codigo=".$cod;
			$query = mysql_query($sql);

			$cont = 0;
			if($rs = mysql_fetch_array($query)){
				
				$listContato = new Contato();
			
				$listContato -> cod = $rs['codigo'];
				$listContato -> nome = $rs['nome'];
				$listContato -> telefone = $rs['telefone'];
				$listContato -> celular = $rs['celular'];
				$listContato -> email = $rs['email'];
		
				return $listContato;
			}
		}
	}

?>