<?php
	class mysql_db{
		
		//Para criar atributos
		public $server;
		public $user;
		public $password;
		
		//Para criar o construtor da class
		public function __construct(){
			//Atribui��o na variavael
			$this->server="localhost";
			$this->user="root";
			$this->password="bcd127";
		}
		//Metodos para abrir a conex�o com o banco 
		public function conectar(){
			//Verifica se � poss�vel realizar a conex�o com o banco
			if($this->con=mysqli_connect($this->server, $this->user, $this->password)){
				mysqli_select_db("dbcontatos4t");//Seleciona o database
			}else{
				echo "Ferrou boy, vaza que ta feio.".mysqli_error();
				die();//Mata a conex�o para que n�o fique presa no sistema operacional
			}
		}
		//Metodos para fechar a conex�o com o banco 
		public function desconectar(){
			//Fecha a conex�o com o banco
			mysqli_close($this->con);
		}
	}


?>