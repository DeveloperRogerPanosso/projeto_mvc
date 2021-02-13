<?php
		/*
		* Arquivo Config estabelecendo configurações para conexão a banco de dados
		* de acordo com ambiente de desenvolvimento estabelecido
		*/
		require_once "Environment.php";

		$config = array();

		if(ENVIRONMENT == "development") {
			$config["dbdriver"] = "mysql";
			$config["dbname"] = "crud_mvc";
			$config["dbhost"] = "localhost";
			$config["dbuser"] = "root";
			$config["dbpass"] = "";
		}else {
			$config["dbdriver"] = "mysql";
			$config["dbname"] = "crud_mvc";
			$config["dbhost"] = "localhost";
			$config["dbuser"] = "root";
			$config["dbpass"] = "";
		}
?>