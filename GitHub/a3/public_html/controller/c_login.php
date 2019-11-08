<?php

$html="";

if(isset($_POST["login"])){
	
	$consulta="SELECT * FROM `users` WHERE user = '".$_POST["user"]."' AND password = '".$_POST["pass"]."'";
	$result=mysqli_query($bbdd,$consulta);
	$cont=0;
	while($fila = mysqli_fetch_assoc($result)){
		setcookie("fail",false);
		$_SESSION["loged"] = $fila["id"];
		$_SESSION["user"]=$fila["user"];
		$_SESSION["view"]="2";
		$cont++;
		header("Location:index.php?c=2");
	}
	if($cont==0){
		unset($_SESSION["user"]);
		$_SESSION["error"]="<p style='color:#FF0000;'><b>Autentificación incorrecta</b></p>";
		setcookie("fail",true);
		header("Location:index.php");
	}
	
}

if(isset($_POST["registro"])){
	//$consulta="SELECT * FROM `users` WHERE user = '".$_POST["user"]."' AND password = '".$_POST["pass"]."'";
	
	$consulta="INSERT INTO `users` (`id`, `user`, `password`) VALUES (NULL, '".$_POST["user"]."', '".$_POST["pass"]."');";
	
	$result=mysqli_query($bbdd,$consulta);
	
	$html="Usuario registrado correctamente";

}

?>