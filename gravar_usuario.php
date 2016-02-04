<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estiloLogin.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <?php
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $cSenha = $_POST["cSenha"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $aniversario = $_POST["txtDt"];

        include("conexao.php");
        $sql = 'select * from usuario where ds_login = "' . $login . '"';
        $resultado = $conexao->query($sql);
        if ($resultado->num_rows > 0) {
            header("Location:formulario_usuario.html?nome=1");
            die("Login ja cadastrado");
            echo "Usuário Já existe, acessa a página principal e faça o login";
        }


        //conferir se as duas senhas são identicas
        if ($senha !== $cSenha) {
            //encaminha para outra pagina
            //header("Location: formulario_usuario.html");
            echo "Senhas diferentes " . $senha . " " . $cSenha;
        } else if (is_null($login) || empty($login)) {
            //header("Location: formulario_usuario.html");
            echo " Login em branco";
        } else if (strlen($login) < 4) {
            //header("Location: formulario_usuario.html");
            echo " Login mto curto, deve ter mais de 3 caracteres";
        } else if (strlen($senha) < 5) {
            echo "senha com poucos careacteres tente com mais de 4";
        } else {
            include("conexao.php");
            $senha = md5($senha);
            $sql = 'insert into usuario (nm_usuario, ds_login, ds_senha, ds_estado, ds_cidade, ds_aniversario, ds_email, ds_telefone)'.
                    ' values ("' . $nome . '","' . $login . '","' . $senha . '","' . $estado . '","' . $cidade . '","' . $aniversario . '","' . $email . '","' . $telefone . '")';
            if (mysqli_query($conexao, $sql)) {
                //echo "<h3> usuario gravado no banco </h3> ";
                header("Location: confirmar.php?login=" . $login);
            } else {
                echo "<h3> falha ao gravar </h3> " .
                mysqli_error($conexao);
            }
        }
        ?>

    </body>
</html>