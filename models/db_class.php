<?php
	class mysql_db{
		
		//Para criar atributos
		public $server;
		public $user;
		public $password;
		//public $con;
		
		//Para criar o construtor da class
		public function __construct(){
			//Atribuiзгo na variavael
			$this->server="localhost";
			$this->user="root";
			$this->password="bcd127";
		}
		//Metodos para abrir a conexгo com o banco 
		public function conectar(){
			//Verifica se й possнvel realizar a conexгo com o banco
			if($this->con=mysql_connect($this->server, $this->user, $this->password)){
				mysql_select_db("dbcontatos4t");//Seleciona o database
				//$this->server, $this->user, $this->password
			}else{
				echo "Ferrou boy, vaza que ta feio.".mysql_error();
				die();//Mata a conexгo para que nгo fique presa no sistema operacional
			}
		}
		//Metodos para fechar a conexгo com o banco 
		public function desconectar(){
			//Fecha a conexгo com o banco
			mysql_close($this->con);
		}
	}


?>