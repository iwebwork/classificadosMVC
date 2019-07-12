<?php
    class homeController extends controller{

        public function index()
        {
            $anuncios = new Anuncios();
            $usuarios = new Usuarios;
            $dados = array(
                'quantidade' => $anuncios->getQuantidade(),
                'usuarios' => $usuarios->getQuantidade()
            );
            $this->loadTempleteOne('home',$dados);

        }




    }