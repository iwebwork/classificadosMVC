<?php
    class galeriaController extends controller{
        
        public function index()
        {  
            $anuncios = new Anuncios();
            $usuarios = new Usuarios;
            $quantidade = array(
                'nome' => $usuarios->getNome(),
                'quantidade' => $anuncios->getQuantidade()
            );
           
            
            $this->loadTempleteOne('galeria',$quantidade);

        }

    }