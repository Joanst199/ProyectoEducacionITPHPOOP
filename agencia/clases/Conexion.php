<?php 
	class conexion
	{
		private function __construct()
		{}// evitamos que se instancie

		static function conectar()
		{
			$link = new PDO(
					'mysql:host=localhost;dbname=agencia', 
					'root', 
					''
				);
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			return $link;
		}
	}



 ?>