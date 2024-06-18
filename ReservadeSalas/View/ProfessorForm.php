<?php
include_once "dao/ConnectionFactory.php";
include_once "dao/ProfessorDao.php";
include_once "model/Professor.php";

$ProfessorDao = new ProfessorDao();
include 'view/professor.php';
?>