<?php
    class homeController extends controller{

        public function index()
        {
            $dados = array(
                'quantidade' => 9,
                'usuarios' => 8
            );
            $this->loadTempleteOne('home',$dados);

        }




    }