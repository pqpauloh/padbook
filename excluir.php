<?php
	if ($_COOKIE['login']){
		$codigo = $_GET["id"];
		include("conexao.php");
		$delete = "delete from artigos where cd_artigo = ".$codigo;
		
		if (mysqli_query($conexao,$delete)) {
			header("Location: anuncios.php");
		} else {
			echo "<h3> falha ao excluir </h3> ".
			mysqli_error($conexao);
			echo "<br>";
			echo $delete;
		}
	} else {
		echo "Você não tem permissão";
	}


?>