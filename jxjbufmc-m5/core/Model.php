<?php 

namespace Core;

class Model {

	static $pdo;

	public function __construct()
	{
		if(!self::$pdo)
			self::$pdo = new \PDO('mysql:host=localhost;dbname=jxjbufmc_m5;charset=utf8', 'jxjbufmc', 'B68UDN');
	}

	static function fetch($query)
	{
		return self::$pdo->query($query)->fetch(PDO::FETCH_ASSOC);
	}

	static function fetchAll($query)
	{
		return self::$pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
	}

	static function prepare($prepare, $params)
	{
		return self::$pdo->prepare($prepare)
						 ->execute($params);
	}

	static function count($query)
	{
		return self::$pdo->query($query)->rowCount();
	}

}