<?php 

namespace App;
use \PDO;

class Database{

	const DB_NAME = "BestialSoul";
	const DB_USER = "root";
	const DB_PASS = "motdepasselocalhostgwen";
	const DB_HOST = "localhost";
	
	// private $pdo;

	public function __construct(){

		try {
			$pdo = new PDO('mysql:dbname='.self::DB_NAME.';host='.self::DB_HOST,self::DB_USER,self::DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));					
			return $pdo;
		} 
		catch (Exception $e) {
			echo 'Erreur : '.$e->getMessage();
		}
	}

	private function getPDO(){
		$pdo = new PDO('mysql:dbname='.self::DB_NAME.';host='.self::DB_HOST,self::DB_USER,self::DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$this->pdo = $pdo;
		return $pdo;	
	}

	public function query($statement, $class = null, $fetch = null){
		if(isset($fetch)) { 
		$req = $this->getPDO()->query($statement);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class);
		}else{
		$datas = $this->getPDO()->query($statement); 
		}
		return $datas;
	}


}