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
    $Professor->setUsuario($d['usuario']);
    $Professor->setSenha($d['Senha']);

    $ProfessorDao->inserir($Professor);
    header("Location: View/ProfessorForm.php");
}// se a requisição for deletar
else if(isset($_GET['del'])){
    $Professor->setId($_GET['del']);
    $ProfessorDao->delete($Professor);
    header("Location: ../ProfessorForm.php");
}
?>