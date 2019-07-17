<?php
    class loginController extends controller{

        public function index()
        {
            $usuario = new Usuarios();
            $dados = array();    
            $this->loadTemplateLogin('login',$dados);     

        }

        public function sair()
        {
            session_destroy();
            $dados['resposta'] = 'none';
            $this->loadTemplateLogin('login',$dados);
        }


    }