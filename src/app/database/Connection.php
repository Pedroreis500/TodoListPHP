<?php

namespace app\database;
use PDO;
use PDOException;

class Connection {

	private $host = 'localhost';
	private $dbname = 'php_com_pdo';
	private $user = 'root';
	private $pass = 'pedro123@';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}

?>