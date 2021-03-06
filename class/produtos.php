<?php
    class Produtos
    {
        private $pdo;
        public $msgErro = "";
    

        public function conectar($nome,$host,$usuario,$senha)
        {
            global $pdo;
            try {
                $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            }catch (PDOException $e) {
                $msgErro = $e->getMessage();
            }
        
        }

        public function cadastrar($cep_origem,$cep_destino) {
            
            global $pdo;

            $sql = $pdo->prepare("SELECT id FROM ceps WHERE cep_origem = :co AND cep_destino =:cd");
            $sql->bindValue(":co", $cep_origem);
            $sql->bindValue("cd",$cep_destino);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return false;
            }
            else
            {
                    $sql = $pdo->prepare("INSERT INTO ceps (cep_origem,cep_destino) VALUES(:co,:cd)");
                    $sql->bindValue(":co",$cep_origem);
                    $sql->bindValue(":cd",$cep_destino);
                    $sql->execute();
                    return true;
            }
        }

        public function listar()
        {
            global $pdo;
            $sql = $pdo->query("SELECT id, cep_origem, cep_destino FROM ceps", PDO::FETCH_ASSOC);

            return ($sql->rowCount() > 0) ? $sql->fetchAll() : [];
        }


        public function deletar($dados) {
            global $pdo;
            $id = $dados[0];
        $pdo->prepare("DELETE FROM ceps WHERE id = :id");
        $id = $dados;
        $sql->bindValue(":id",$id);
        $sql->execute();


        }

        // public function consultaCEP() {
            
        //     $url = "https://www.cepaberto.com/api/v3/cep"
            
        //     $cep_origem

        // }
 
    }
?>