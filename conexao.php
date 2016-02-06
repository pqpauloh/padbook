<?php
    $conexao = new mysqli("localhost", "u472199986_beta", "247611pauloh", "u472199986_padbk");
	if ($conexao->connect_error) {
		echo "Conexao com o banco falhou: " . $conexao->connect_error;
	} 

?>