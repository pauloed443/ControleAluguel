<?php 
namespace App\Dao;

use PDO, PDOException;
/**
 * 
 */
class Conexao {

	private static $host;
	private static $dbname;
	private static $user;
	private static $pass;
	public static $connection;

	function __construct()
	{
		self::$host = 'localhost';
		self::$dbname = 'leidebrink';
		self::$user = 'root';
		self::$pass = '';
	}

	public static function getConnection() {
		if (!isset(self::$connection)) {
			try {
				self::$connection = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname, self::$user, self::$pass);
			} catch (PDOException $e) {
				echo "Erro conexão".$e->getMessage();
			}
		}
		return self::$connection;
	}

}


