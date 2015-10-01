<?php 

class connexion_BDD{

function connect()
	{
	$host = "localhost";
	$user = "root";
	$password = "motdepasselocalhostgwen";
	$db_name = "BestialSoul";
	$link = mysqli_connect("$host","$user","$password","$db_name");
	}
function select_all()
	{
	mysqli_query($link, "SELECT * FROM members WHERE id='$_SERVER[REMOTE_ADDR]'");
	}
}

 ?>