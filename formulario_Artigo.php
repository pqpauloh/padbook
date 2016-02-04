<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastre seu Classificado</title>
        <link href="css/estiloArtigos.css" type="text/css" rel="stylesheet">
    </head>
    <body>
          <?php
			$login = "";
			if (isset($_GET["login"])){
				$login = $_GET["login"];
			}
		?>
         <div>
            <nav>
                <ul class="slideuptabs red">
                    <li id="home"><a href="index.php">Acessar Conta</a></li>
                    <div id="cssmenu">


                </ul>
            </nav>

            </div>
        <form action="gravar_artigos.php" method="POST" id="forms">
             <h1>Solte Sua Imaginação</h1>
            <label id="umdois">Titulo do Artigo</label><br/>
            <input type="text" name="titulo" placeholder="Digite um nome para seu Artigo..." />
            <br /><br/>
            <label id="umdois">Descrição do Artigo</label><br/>
			<textarea type="text" name="descricao" placeholder="Digite aqui a descrição do artigo . ." id=""></textarea>
            <br /><br/>
			<label id="umdois">Nome do Autor</label><br/>
            <input type="text" name="autor" placeholder="Digite o seu nome..." />
            <br /><br/>
			<input type="Submit" value="Publicar"/>
          </form>

    </body>
</html>
