<?php
		/*
		* class Core responsavel por startar e estruturar MVC dando inicio ao seu funcionamento
		* recuperando dados apartir de seu domínio(raiz) URL como classController/metodo(action)/parametros
		* para realizar as devidas requisições ao usuário final
		*/
		namespace App\Core;

		class Core {

			public function __construct() {
				$this->run();
			}

			public function run() {
				if(isset($_REQUEST["url"])) {
					$url = $_REQUEST["url"];
				}

				if(!empty($url)) {
					$url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
					$controller = $url[0]."Controller";
					array_shift($url);

					if(isset($url[0]) AND !empty($url[0])) {
						$metodo = $url[0];
						array_shift($url);
					}else {
						$metodo = "index";
					}

					$parametros = array();
					if(count($url) > 0) {
						$parametros = $url;
					}
				}else {
					$controller = "homeController";
					$metodo = "index";
					$parametros = array();
				}

				echo "<br>\n";
				echo "Controller Requisitado: " . $controller."<br>\n";
				echo "Metodo(action) Requisitado: " . $metodo."<br>\n";
				echo "Parametros da action Requisitado: " . print_r($parametros, true)."<br>\n";

				$caminhoController = "crud_mvc/App/Controllers/".$controller.".php";
				if(!file_exists($caminhoController) AND !method_exists($controller, $metodo)) {
					$controller = "homeController";
					$metodo = "index";
					$parametros = array();
				}

				$objetoController = new $controller();
				call_user_func_array(array($objetoController, $metodo), $parametros);
			}
		}
?>