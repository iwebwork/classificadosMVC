<?php
    class Usuarios extends model{

        public function getNome()
        {
            $nome = "fulado";
            return $nome;
        }

        public function getQuantidade()
        {
            $sql = "SELECT COUNT(*) as c FROM usuarios";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $resultado = $sql->fetch();
                
            }else{
                $resultado['c'] = 0;
            }

            return $resultado['c'];
        }

    }