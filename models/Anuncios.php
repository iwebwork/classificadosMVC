<?php
    class Anuncios extends model{

        public function getQuantidade()
        {
            $sql = "SELECT COUNT(*) as c FROM anuncios";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $resultado = $sql->fetch();
                
            }else{
                $resultado['c'] = 0;
            }

            return $resultado['c'];

        }

    }