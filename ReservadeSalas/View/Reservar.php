<?php
// Conexão com o banco de dados
  $banco = new mysqli(
        "localhost", "root", "", "ReservaSala", "3306"
    );
    if($banco->connect_errno){
        echo "Erro ao conectar no banco de dados: " . $banco->connect_error;
        exit();
    }else{
        echo "Conectado com sucesso!";
    }
    //$banco->close();


// Lógica para INSERT
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegar dados do formulário
    $data_hora_inicio = $_POST['data_hora_inicio'];
    $data_hora_fim = $_POST['data_hora_fim'];
    $usuario_id = $_POST['usuario_id'];
    $sala_id = $_POST['sala_id'];

// Monta a string que será executada
    $sql = "INSERT INTO Reservas(sala_id, usuario_id, data_inicio, data_fim) VALUES (?, ?, ?, ?)";
    
 // Prepara o statement para execução segura
 if ($stmt = $banco->prepare($sql)) {
    // Vincula os parâmetros ao statement
    $stmt->bind_param("iiss", $sala_id, $usuario_id, $data_hora_inicio, $data_hora_fim);
    
    // Executa o statement
    if ($stmt->execute()) {
        echo "<p>Reserva feita com sucesso!</p>";
        header('Location: Reservar.php');
        exit;
    } else {
        echo "<p>Erro ao fazer a reserva: " . $stmt->error . "</p>";
    }
    
    // Fecha o statement
    $stmt->close();
} else {
    echo "<p>Erro ao preparar a reserva: " . $banco->error . "</p>";
}

// Fecha a conexão com o banco de dados
$banco->close();
}







 /* Inserir reserva no banco de dados
    
    require 'conectaBanco.php'; // conexão fecha 
    $data_hora_inicio = $_POST['data_hora_inicio'];
    $data_hora_fim = $_POST['data_hora_fim'];
    $usuario_id = $_POST['usuario_id'];
    $sala_id = $_POST['sala_id'];
    
    // Monta a string que será executada
    $sql = "INSERT INTO Formulario(Sala, Usuario, data_hora_inicio, data_hora_fim) VALUES ('$usuario_id','$sala_id', '$data_hora_inicio','$data_hora_fim')";
    // Executar o código SQL
    $banco->query($sql);
    // Verifica quantas linhas foram afetadas
    if($banco->affected_rows >= 1){
        echo "<p> $Reserva Reserva feita com sucesso!</p>";
    }
    $banco->close();
    header ('Location:Reservar.php');
    exit;

}

// Lógica para SELECT
 */
?>