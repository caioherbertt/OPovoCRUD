<?php
session_start();
?>
<!DOCTYPE html>
<!-- Estrutura da página em html, junto com o código em php para obtenção dos dados -->
<html lang="pt-br">
	<head>
		<meta charset="utf-8"> 
		<title>CRUD O POVO </title>
	</head>
	<body>
		<h1>Cadastrar usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action ="processamento.php">
			<label>Nome: </label>
			<input type="text" name="no" placeholder="Digite seu nome"><br> 
			
			<label>Profissão: </label>
			<input type="text" name="prof" placeholder="Digite sua profissão"><br>
			
			<input type="submit" value="Cadastrar"><br><br>
		
		</form>
		<!-- Botão de visualização dos dados, no qual encaminha o usuário a tela de visualização e exclusão de dados -->
		<form method="POST" action ="visualizacao.php">
			<label>Para visualizar dados cadastrados</label>
			<input type="submit" value="Visualizar">
		
		</form>
	</body>
</html>

