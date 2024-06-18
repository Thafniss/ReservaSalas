<?php
    include 'html/reserva.html';
    
    // Receba os dados e instancie um objeto Produto
    if(isset($_POST['sala_id']) && isset($_POST['usuario_id']) && isset($_POST['data_hora_inicio']) && isset($_POST['data_hora_fim'])){
        require_once 'model/Salas.php';// Estrutura da classe Produto
        $reserva = new $Reserva($_POST['sala_id'], $_POST['usuario_id'], $_POST['data_hora_inicio'], $_POST['data_hora_fim']);
        

        $sala_id = $_POST['sala_id'];
        $usuario_id = $_POST['usuario_id'];
        $data_hora_inicio = $_POST['data_hora_inicio'];
        $p1 = new $reserva ($sala_id, $ususario_id, $data_hora_inicio);
        
        require_once 'banco/ConnectionFactory.php';
        $bd = new ConnectionFactory;
        
    }else{
        
        echo "Por favor, preencha o formulário de reserva.";
    }