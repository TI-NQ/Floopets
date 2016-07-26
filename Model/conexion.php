<?php

	class floopets_BD
	{
		private static $db_host="localhost";
		private static $db_name="floopets";
		private static $db_user ="root";
		private static $db_pass ="";
		private static $conexion= null;

		public static function Connect()
		{
					if (self::$conexion==null)
					{
							try
							{
										self::$conexion = new PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name, self::$db_user, self::$db_pass);
		 								self::$conexion -> exec("SET CHARACTER SET utf8");
							}
							catch(PDOException $e)
							{
										die($e->getMessage());
										echo "Sin conexion";
							}
					}
					return self::$conexion;

		public static function Disconect()
		{
				self::$conexion==null;
		}
	}
  ?>
