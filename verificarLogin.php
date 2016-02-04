<!DOCTYPE html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estiloLogin.css" type="text/css" rel="stylesheet">

    </head>
    <body>

        <?php
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        include('conexao.php');
        $sql = 'select * from usuario where ds_login = "' . $login . '" ' .
                ' and ds_senha = "' . md5($senha) . '"';

        $resultado = $conexao->query($sql);
        if ($resultado->num_rows > 0) {
            setcookie('login', $login, (time() + 240));
            header('Location: profile.php');
        }else {
			 setcookie('login');
			header('Location: index.php');
			
        }
		
        ?>

    </body>
</html>
