<?php
    class loginController extends controller{

        public function index()
        {
            $dados = array();
            $this->loadTemplateLogin('login',$dados);

        }

        public function logar()
        {
            $dados = array();
            $resultado = false;
            $usuario = new Usuarios();
            if(!empty($_POST)){
                $resultado = $usuario->login($_POST['email'],$_POST['senha']);
            }else{
                header("Location: ".BASE_URL);
                exit;
            }

            if($resultado == false){
                header("Location: ".BASE_URL);
                exit;
            }else{
                $this->loadTempleteOne('home',$dados);
            }
        }


    }