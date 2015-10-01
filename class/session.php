<?php 

class Connexion{

	private static $link;

	const SERVER = "localhost";
	const USER = "root";
	const PASS = "motdepasselocalhostgwen";
	const BDD = "BestialSoul";

	private $objet = "id";
	private $table = "Utilisateur";
	private $scope = "id";


	public function verifConnexion($id){

		$link = self::$link = new mysqli(self::SERVER,self::USER,self::PASS,self::BDD);

		$query = $link->query("SELECT * FROM Utilisateur WHERE id='$_POST[id]'");
		$row = $query->fetch_object();

		if ($row == 0) {
			session_destroy();
			echo "<script>alert(\"Cet utilisateur n'existe pas\")</script>";
			header("Refresh: 0;url=index.php");
		}
		else{
			session_start();
			$_SESSION['user'] = $row->id;
			echo $_SESSION['user'];
			header("Refresh: 0;url=index.php?accueil");
		}

	}

	public function testMysqli($link){
		if ($link->connect_errno) {
			printf("Erreur de connexion: %s\n", $link->connect_error);
		}
	}

	public function adminSession($admin){
		if ($admin != 1) {
			session_destroy();
			Content::refresh(0,"index.php");
		}
		else{
			session_start();
			$query = $link->query("SELECT * FROM Utilisateur WHERE id='$admin'");
			$row = $query->fetch_object();
			$_SESSION['id'] = $row->id;
			$admin = 1;
  		}
	}

	public function verifPost($objet){

		$link = self::$link = new mysqli(self::SERVER,self::USER,self::PASS,self::BDD);

		$query = $link->query("SELECT * FROM Contact WHERE email='$objet'");
		$row = $query->fetch_object();

		if ($row) {
			echo "<script>alert(\"Vous avez déja enregistré ce mail\")</script>";
			header("Refresh: 0;url=index.php");
		}
	}


	public static function queryObjet($table, $scope, $object){

		$link = self::$link = new mysqli(self::SERVER,self::USER,self::PASS,self::BDD);

		$query = $link->query("SELECT * FROM $table WHERE $scope='$_SESSION[user]'");
		$row = $query->fetch_object();

		return $row->$object;

	}


	public static function queryCustom($query){
		$link = self::$link = new mysqli(self::SERVER,self::USER,self::PASS,self::BDD);
		return $link->query($query)or die('Erreur query');
	}

}

 ?>