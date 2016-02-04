<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estiloLogin.css" type="text/css" rel="stylesheet">


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
    <form action="verificacao.php" method="POST">
        <div class="box" id="box">
            <br/>
            <br/>
            <br/>
			 <img src="img/icone_usuario.jpg" width="100" height="100" id="imgs" >
			<form action="gravar_usuario.php" method="POST">
			<tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input type="file" name="imagem" >

   </td>
  </tr>
  </form>
           
            <br/>

            <h2 id="verdana">
                Olá, bem-vindo!! <?php echo $login ?>
            </h2>

            <div id="dois">
                <label>
                    <input type="password" name="senha" id="senha" size="30" maxlength="15" placeholder="        Senha" /> 
                </label>
            </div>

            <label id="nova">
                <input type="button" size="30" maxlength="15" value="Esqueceu a Senha?" onClick="location.href = 'redefinir_Senha.php'">

            </label>
            <input id   ="enter" type="submit" value="Entrar">
        </div>
    </form>
</center>
</body>
</html>
