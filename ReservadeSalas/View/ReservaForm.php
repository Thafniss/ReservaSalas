<?php
    include 'View/Reserva.html';
    
    // Receba os dados e instancie um objeto reserva
    if(isset($_POST['sala_id']) && isset($_POST['usuario_id']) && isset($_POST['data_hora_inicio']) && isset($_POST['data_hora_fim'])){
        require_once 'model/Processa_reserva.php';// Estrutura da classe reserva
        $reserva = new $Reserva($_POST['sala_id'], $_POST['usuario_id'], $_POST['data_hora_inicio'], $_POST['data_hora_fim']);
        

        $sala_id = $_POST['sala_id'];
        $usuario_id = $_POST['usuario_id'];
        $data_hora_inicio = $_POST['data_hora_inicio'];
        $data_hora_fim = $POST ['data_hora_fim'];
        $p1 = new $reserva ($sala_id, $ususario_id, $data_hora_inicio, $data_hora_fim);
        
        require_once 'dao/ConnectionFactory.php';
        $bd = new ConnectionFactory;
        
    }else{
        
        echo "Por favor, preencha o formulário de reserva.";
    }