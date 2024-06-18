<?php
include_once "../dao/ConnectionFactory.php";
include_once "../dao/ProfessorDao.php";
include_once "../model/Professor.php";

$Professor = new Professor();
$ProfessorDao = new ProfessorDao();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){
    $professor->setUsuario($d['usuario']);
    $Professor->setSenha($d['Senha']);

    $ProfessorDao->inserir($professor);
    header("Location: ../ProfessorForm.php");
}// se a requisição for deletar
else if(isset($_GET['del'])){
    $professor->setId($_GET['del']);
    $ProfessorDao->delete($professor);
    header("Location: ../ProfessorForm.php");
}
?>