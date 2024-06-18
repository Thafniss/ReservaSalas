?>

    <?php
    // Função para validar as entradas do usuário
    function validarEntrada($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // Variáveis para conexão com o banco de dados
    $servidor = "localhost";
    $usuarioDB = "nome_usuario";
    $senhaDB = "senha_usuario";
    $nomeBanco = "nome_do_banco_de_dados";
    
    // Criar conexão
    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    
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
    
    class Usuario {
        private $usuario_id;
        private $nome;
        // Métodos para manipular dados do usuário
        public function __construct($usuario_id, $nome) {
            $this->usuario_id = $usuario_id;
            $this->nome = $nome;
        
    }
}
    
    // Exemplo de uso da função validarEntrada
    $nomeSala = validarEntrada($_POST['nome']);
    $capacidadeSala = validarEntrada($_POST['capacidade']);
    $Usuario = validarEntrada($_POST['Usuario']);
    
    // Não se esqueça de validar e sanitizar todas as entradas que você receber do usuário antes de usá-las em seu banco de dados ou lógica de aplicação.
    ?>
    
    
    Neste código, eu adicionei a função validarEntrada e as variáveis de conexão com o banco de dados no início do script. As classes Sala, Reserva e Usuario permanecem inalteradas.
     Você pode adicionar os métodos necessários dentro de cada classe conforme sua necessidade.
      Lembre-se de substituir os valores das variáveis $servidor, $usuarioDB, $senhaDB e $nomeBanco com as informações reais do seu banco de dados.
    
    Espero que isso ajude! Se precisar de mais assistência, estou aqui para ajudar.