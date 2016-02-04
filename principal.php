<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estiloPrincipal.css" type="text/css" rel="stylesheet">
        
	
    </head>
    <body>
          <?php
        $login = "";
        if (isset($_GET["login"])) {
            $login = $_GET["login"];
        }
        ?>
        
       
<center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="gravar_anuncio.php" method="POST">
         <div class="box" id="box">
            <br/>
            <br/>
            <br/>
            <img src="img/icone_usuario.jpg" width="100" height="100" id="imgs" >
            <br/>

            <h2 id="verdana">
                Olá, bem-vindo!! <?php echo $login ?>
            </h2>
            <h2>Faça seu anuncio aqui !</h2>
            <div id="um">
                <label>
                    <input type="text" class="input_text" placeholder="Título para o anuncio" name="nome" id="name" size="30" maxlength="50"/>
                </label> 
            </div>

            <div id="dois">
                <textarea type="text" name="descricao" id="senha" placeholder="Digite a descrição do seu Anuncio. . .">
                    
                </textarea>
            </div><br/>
            <input id="enter" type="submit" value="Anunciar">
        </div>
        </form>
</center>
    </body>
</html>
