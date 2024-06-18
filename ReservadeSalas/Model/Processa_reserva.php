?>

    <?php
    //  validar as entradas do usuário
    function validarEntrada($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    //  conexão com o banco de dados
    $servidor = "localhost";
    $usuarioDB = "root";
    $senhaDB = "";
    $reservasalas= "reservasalas";
    
    // Criar conexão
    $conn = new mysqli($servidor, $usuario, $senhaDB, $reservasalas);
    
    // Checar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    

    class Reserva {
        private $reserva_id;
        private $sala_id;
        private $usuario_id;
        private $data_inicio;
        private $data_fim;
    
        public function __construct($reserva_id, $sala_id, $usuario_id, $data_inicio, $data_fim) {
            $this->reserva_id = $reserva_id;
            $this->sala_id = $sala_id;
            $this->usuario_id = $usuario_id;
            $this->data_inicio = $data_inicio;
            $this->data_fim = $data_fim;
        }

    }
    
    class Usuario{
        private $usuario_id;
        private $nome;
        private $senha;
        // Métodos para manipular dados do usuário
        public function __construct($usuario_id, $nome, $senha) {
            $this->usuario_id = $usuario_id;
            $this->nome = $nome;
            $this->senha = $senha;
        
    }
}
    
  // função validarEntrada
    $nomeSala = validarEntrada($_POST['nome']);
    $capacidadeSala = validarEntrada($_POST['capacidade']);
    $Usuario = validarEntrada($_POST['Usuario']);
    
   
    ?>
