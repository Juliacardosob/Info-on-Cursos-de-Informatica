<?php
	$conexao = mysqli_connect("localhost", "root", "", "infocurso");
	if(!$conexao){
		echo("Erro na conexão com a base de dados!");
	}
	else{
		$varemail = $_POST["email"];
		$varsenha = $_POST["senha"];
		$query = mysqli_query($conexao, "INSERT INTO usuario
		(email,senha) VALUES
		('$varemail','$varsenha')");
		echo '<script language="JavaScript" charset="uft-8">
		alert("Cadastro efetuado com sucesso!")</script></p>';
	}
?>
<html>
	<p><a href="../cadastro.html" id="letramaior">Voltar a pagina de cadastro</a></p>
</html>
