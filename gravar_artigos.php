<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estiloLogin.css" type="text/css" rel="stylesheet">
         
    </head>
    <body>
<?php
	$titulo   = $_POST["titulo"];
	$descricao  = $_POST["descricao"];
	$autor  = $_POST["autor"];
	//conferir se as duas senhas são identicas
	if (is_null($titulo)){
		//encaminha para outra pagina
		//header("Location: formulario_usuario.html");
		echo "Defina um nome para seu artigo";
	} else if (is_null($descricao) || empty($descricao)) {
		//header("Location: formulario_usuario.html");
		echo " Descrição em branco";		
	} else {
		include("conexao.php");
		$sql = 'insert into artigos (nm_titulo, ds_artigo, nm_autor) '.
			   ' values ("'.$titulo.'","'.$descricao.'","'.$autor.'")';
		if (mysqli_query($conexao,$sql)) {
			header("Location: artigos.php");
		} else {
			header("Location:principal.php?login=".$descricao);
			mysqli_error($conexao);
		}
	}
?>
	
	</body>
</html>