<?php
class ConexionDB{
	private $host		='127.0.0.1';
	private $user		='root';
	private $pass		='';
	private $database	='dbaspaah1';

	public function iniciarDB(){

		$link = new mysqli("127.0.0.1", "root", "", "dbaspaah1");
		if (mysqli_connect_errno()) {
			printf("Falló la conexión failed: %s\n", $link->connect_error);
			exit();
		}

		return $link;
	}


}
?>

