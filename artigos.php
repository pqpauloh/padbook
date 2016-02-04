<html>
    <head>
        <title>Anuncios</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
                <link href="css/estiloLogin.css" type="text/css" rel="stylesheet">
                <link href="css/cssAnuncio.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div>
            <nav>
                <ul class="slideuptabs red">
                    <li id="home"><a href="index.php">Acessar Conta</a></li>
                    
                </ul>
            </nav>
           
            </div>
                    <center>
                    <h1 id="colorir">Artigos</h1>
                    </center>
	<?php
	
		include("conexao.php");
		
		$resultado = $conexao->query("select * from artigos");
		if ($resultado->num_rows > 0){
			echo "<center><div class='box' id='box'><table>";
			echo "<tr>";
			echo "<th>Título</th><th>Artigo</th><th>Autor</th>";
			echo "</tr>";
			while ($linha = $resultado->fetch_assoc()){
				echo "<tr>";
				echo "<td>".$linha["nm_titulo"]."</td>";
				echo "<td>".$linha["ds_artigo"]."</td>";
				echo "<td>".$linha["nm_autor"]."</td>";
				echo "</tr>";
			}
			echo "</table></div></center>";
		}		
	?>
        
    </body>
</html>