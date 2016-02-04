<html>
    <head>
        <title>Sair</title>
        <meta charset="utf8">
        <link href="css/estiloLogin.css" type="text/css" rel="stylesheet">
            
    </head>
    <body>
        <div>
            <nav>
                <ul class="slideuptabs red">
                    <li id="home"><a href="index.php">Home</a></li>
                  </ul>
            </nav>
           
            </div>
        <?php
        setcookie('login', $_COOKIE['login'], time());
        echo "<h3>Você saiu com sucesso!!!</h3>";
        ?>
    </body>
</html>