<?php
    $conexao = new mysqli("Global", "Root", "", "padbook");
	if ($conexao->connect_error) {
		echo "Conexao com o banco falhou: " . $conexao->connect_error;
	} 

?>
