<?php

session_start();
include_once("conexaobd.php"); // incluindo o arquivo de conexão ao banco de dados
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // variável id, e o código para obtenção do valor de id referente aos dados, na aba de visualização
$result_usuario = "DELETE FROM cadastro1 WHERE id='$id'"; // função que exclui o dado de acordo com a id selecionada
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){ // condição para exibir mensagem de sucesso ao apagar e retornar a página principal
	$_SESSION['msg'] = "Dados apagados com sucesso";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "Não foi possível apagar os dados"; // mensagem caso não seja possível excluir dados e função para retornar a página principal
	header("Location: index.php");
}


