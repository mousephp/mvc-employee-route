<?php 

/**
 * 
 */
class Database
{
	
	public static $db;
	private static $dns='mysql:host=localhost;dbname=mvc_ytb';
	private static $username='root';
	private static $password='';


	public static function connect()
	{
		if(!isset(self::$db)){
			try {
				self::$db=new PDO(self::$dns,self::$username,self::$password);
				self::$db->exec('set names utf-8');
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			//return self::$db; false
		}
		return self::$db;

	}
}






?>