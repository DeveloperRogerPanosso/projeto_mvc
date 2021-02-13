<?php
		/*
		* class ConnectMysql estabelecendo conexão a banco de dados de acordo
		* com configurações definidas. Utilizando padrão singleton(Instancia Única)
		*/
		namespace App\Connect;

		class ConnectMysql {
			private static $instancePdo = null;

			private function __construct(){}
			private function __clone(){}
			private function __destruct(){}

			public static function getInstancePdo() {
				if(!isset(self::$instancePdo) AND self::$instancePdo === null) {
					require "Config.php";
					self::$instancePdo = new \PDO($config["dbdriver"].":dbname=".$config["dbname"].";host=".$config["dbhost"], $config["dbuser"], $config["dbpass"]);
					self::$instancePdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
					echo "Conexão estabelecida com sucesso...";
				}
				return self::$instancePdo;
			}
		}
?>