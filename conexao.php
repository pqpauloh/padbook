<?php
    $conexao = new mysqli("localhost", "beta", "247611", "padbook");
	if ($conexao->connect_error) {
		echo "Conexao com o banco falhou: " . $conexao->connect_error;
	} 

?>
