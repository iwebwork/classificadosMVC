<?php
    class loginController extends controller{

        public function index()
        {
            $usuario = new Usuarios();
            $dados = array();
            $dados['resposta'] = 'none';

            if(!empty($_POST)){
                // se post não estiver vazio
                //print_r($_POST);
                $id = $usuario->login($_POST['email'],$_POST['senha']);
                if($id != false ){
                    //loguei
                    //echo "Entrou na pagina inicial";
                    $_SESSION['cLogin'] = $id;
                    header("Location: ".BASE_URL."home"); 
                    
                }else{
                    //Usuario incorreto
                    $dados['resposta'] = 'block';
                    $this->loadTemplateLogin('login',$dados);
                }
            }else{
                //se post estiver vazio
                $dados['resposta'] = 'none';
                //echo "Post foi vazio";
                $this->loadTemplateLogin('login',$dados);
            }

            


        }

        public function sair()
        {
            session_destroy();
            $dados['resposta'] = 'none';
            header("Location: ".BASE_URL);
            exit;
        }


    }