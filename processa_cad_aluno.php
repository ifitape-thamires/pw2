<?php
require_once('conexao.php');
 
  $nome = $_POST['txtNome'];
  $cidade = $_POST['txtCidade'];
  $rdsexo = $_POST['rdSexo'];
  $telefone = $_POST['txtTelefone'];
  $prontuario = $_POST['txtProntuario'];
  $turma = $_POST['txtTurma'];


$comando = "INSERT INTO aluno (nome, cidade, sexo, prontuario, telefone, id_turma) 
VALUES ('$nome', '$cidade', '$rdsexo', '$prontuario', '$telefone', '$turma')";

$rodou = mysqli_query($conexao, $comando);

if ( $rodou ) {
    require "cabecalho.php";
    echo "Aluno inserido com sucesso";
} else {
    echo "Erro ao inserir aluno";
}
  