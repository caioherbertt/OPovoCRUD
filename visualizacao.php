
<?php
// arquivo referente a visualização dos dados ( também inseri o botão de exclusão dos dados
session_start(); // iniciando sessão, para utilizar isset e unset, referentes a exibição de mensagem
include_once("conexaobd.php"); // incluindo o arquivo de conexão do banco de dados

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>"
		<meta charset="utf-8">
		<title>CRUD - Visualizar</title> 
	</head>
	<body>
		<h1>Visualizar dados</h1>
		<?php
		//exibição de mensagens ao usuário
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		$result_usuarios = "SELECT *FROM cadastro1"; // selecionando os dados do banco de dados para exibição
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);// variável para armazenamento dos dados
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){ // atribuindo os valores de linhas para o while faer um loop e buscar todos os dados do BD
			echo "Nome: ". $row_usuario['nome'] ; // exibindo os valores registrados em "nome"
			echo " Profissão: ". $row_usuario['profissao']. "<br>"; //exibindo os valores registrados em "profissao"
			echo "<a href='apagardado.php?id=". $row_usuario['id']. "'>Apagar</a><br>"; // função que exclui todos os dados de uma linha
			}
		
		
		?>
		
		<! -- botão voltar, que executa a função para voltar a página principal -->
		<form method="POST" action ="index.php"><br>
			<label>Para voltar a página principal</label>
			<input type="submit" value="Voltar">
	</body>
</html>	