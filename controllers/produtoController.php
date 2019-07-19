<?php
    class produtoController extends controller{

        public function index()
        {
            
        }

        public function abrir($id)
        {
            $a = new Anuncios();
            $u = new Usuarios();

            if(empty($id)){
                header("Location: ".BASE_URL);
                exit;
            }else{
                if($_SESSION['cLogin'] == false){
                    header("Location: ".BASE_URL);
                    exit;
                }else if($_SESSION['cLogin'] == true){
                    $info = $a->getAnuncio($id);
                    $dados = array(
                        'info' => $info
                    );
                    $this->loadTempleteOne('produto', $dados);
                }

            }

            
        }

    }