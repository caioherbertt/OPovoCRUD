<?php
session_start();
include_once("conexaobd.php");

$no = filter_input(INPUT_POST, 'no', FILTER_SANITIZE_STRING); // variável no que recebe o dado digitado em "nome"
$prof = filter_input(INPUT_POST, 'prof', FILTER_SANITIZE_STRING); // variável prof que recebe o que foi escrito em "profissao"


$result_usuario = "INSERT INTO cadastro1 (nome, profissao) VALUES ('$no','$prof')"; // variável criada para inserir os dados no phpmyadmin	
$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)){ // verificção se os dados foram inseridos no banco de dados
	$_SESSION['msg'] = "Dados cadastrados com sucesso"; //caso consiga cadastrar, retorna a mensagem ao usuário
	header("Location: index.php"); // função para voltar a tela de início
}
else{
	header("Location: index.php"); // caso não seja possível inserir os dados, a função de retorno é chamada também
}