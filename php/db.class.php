<?php

class db {
	private $host = 'localhost'; //local
	private $usuario = 'root'; //usuario do db hostgator: athayde
	private $senha = ''; //senha do db hostgator: athayde@2017
	private $database = 'letgo693_athayde'; //nome do banco

	public function conecta_mysql(){
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database); //cria conexao com o banco
		mysqli_set_charset($con, 'utf8'); //muda para mesma tabela de caracteres
		if(mysqli_connect_errno()){ //verifica erro na conexao
			echo 'Erro ao conectar ao banco de dados. Erro: '.mysqli_connect_error();
		}
		return $con;
	}
}

?>