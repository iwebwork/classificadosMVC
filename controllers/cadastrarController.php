<?php
    class cadastrarController extends controller{

        public function index()
        {
            $u = new Usuarios();
            $dados = array();
            $this->loadTemplateCadastrar('cadastrar',$dados);
        }

        public function inserir()
        {
            $u = new Usuarios();
            $dados = array();
            if(!empty($_POST)){

                $resultado = $u->inserir($_POST);
                if($resultado == true){
                    header("Location: ".BASE_URL);
                }else{
                    $this->loadTemplateCadastrar('cadastrar',$dados);
                }

            }else{
                $this->loadTemplateCadastrar('cadastrar',$dados);
            }
        }

    }