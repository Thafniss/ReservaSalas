<?php 
include_once 'dao/ConnectionFactory.php';
include_once 'View/Professor.php';
include_once 'dao/ProfessorDao.php';

class ProfessorDao{

    
    public function inserir(Professor $prof){
        try{
            $sql = "insert into Professor(Usuario, Senha) values 
                    (:Usuario, :Senha);";
            $con_sql = ConnectionFactory::getConnection()->prepare($sql);
            $con_sql->bindValue(":Usuario", $prof->getUsuario());
            $con_sql->bindValue(":Senha", $prof->getSenha());
            return $con_sql->execute();
        }catch(Exception $e){
            print "<p>Erro ao inserir Professor </p> <p> $e </p>";
        }
    }

    public function read(){
        try{
            $sql = "SELECT * FROM Professor";
            $result = ConnectionFactory::getConnection()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $Prof_lista = []; 
            foreach($lista as $l){
                $Prof_lista[] = $this->listaProfessores($l);
            }
            return $Prof_lista;
        }catch(Exception $e){
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
            return []; 
        }
        
    }


    public function listaProfessores($row){
        $Professor = new Professor();
        $Professor->setId($row['id']);
        $Professor->setUsuario($row['Usuario']); 
        $Professor->setSenha($row['senha']); 

        return $Professor;
    }

    public function delete(Professor $professor) { 
        try {
            $sql = "DELETE FROM Professor WHERE id = :id"; 
            $p_sql = ConnectionFactory::getConnection()->prepare($sql);
            $p_sql->bindValue(":id", $professor->getId()); 
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir Professor<br> $e <br>";
        }
    }

}

?> 