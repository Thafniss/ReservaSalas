<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Professor</title>
    <style>
    body {
            background-color:#354f52; 
        }
        .btn-primary{
        background-color: #cad2c5;
        border-color: #cad2c5;
        color: #354f52; 
       }

       .btn-primary:hover {
       background-color:#354f52;
       border-color: #cad2c5; 
       }
        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color:#84a98c;
        }
        h1 {
            margin-bottom: 0.5em;
            color:#354f52;
        }
        .form-label, .btn-primary, .btn-danger {
            color:#354f52;
        }
        .table {
            text-align: center;
            color:#354f52; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h1>Cadastro de Professores</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="controller/ProfessorController.php" method="post">
                    <div class="col-12 mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control " required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="text" name="senha" class="form-control ">
                    </div>
                    <input type="submit" name="cadastrar" value="Salvar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Senha</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    include_once "C:\\xampp\\htdocs\\ReservaSalas\\ReservadeSalas\\dao\\ProfessorDao.php";


                    $ProfessorDao = new ProfessorDao();
                    foreach ($ProfessorDao->read() as $Professor) :?>
                        <tr>
                        <td><?= $Professor->getId() ?></td>
                        <td><?= $Professor->getUsuario() ?></td>
                        <td><?= $Professor->getSenha() ?></td>
                        
                        
                        <td>
                        <a href="controller/ProfessorController.php?del=<?= $Professor->getId() ?>">
                                <button class="btn  btn-danger btn-sm" type="button">Excluir</button>
                        </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                  </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>