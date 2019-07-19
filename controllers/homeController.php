<?php
    class homeController extends controller{

        /* dados do bonieky

            $filtros = array(
                        'categoria' => '',
                        'preco' => '',
                        'estado' => ''
                    );
                    if(isset($_GET['filtros'])) {
                        $filtros = $_GET['filtros'];
                    }

                    $total_anuncios = $a->getTotalAnuncios($filtros);
                    $total_usuarios = $u->getTotalUsuarios();

                    $p = 1;
                    if(isset($_GET['p']) && !empty($_GET['p'])) {
                        $p = addslashes($_GET['p']);
                    }

                    $por_pagina = 2;
                    $total_paginas = ceil($total_anuncios / $por_pagina);

                    $anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);
                    $categorias = $c->getLista();

                    
                    $dados['total_anuncios'] = $total_anuncios;
                    $dados['total_usuarios'] = $total_usuarios;
                    $dados['categorias'] = $categorias;
                    $dados['filtros'] = $filtros;
                    $dados['anuncios'] = $anuncios;
                    $dados['total_paginas'] = $total_paginas;
                    //print_r($dados);
                    
                    $this->loadTempleteOne('home',$dados);

        */

        public function index()
        {
            $a = new Anuncios();
            $u = new Usuarios();
            $c = new Categorias();
            $dados = array();

            $dados = array();
            $dados['resposta'] = 'none';
            $usuario = new Usuarios();
            
            if(empty($_SESSION['cLogin']) && !isset($_SESSION['cLogin'])){
                echo "deu erro";
                header("Location: ".BASE_URL."login");
                exit;
            }else{
                //echo $_SESSION['cLogin'];
                $_SESSION['nomeUsuario'] = $u->getNomeUsuario($_SESSION['cLogin']);
                $filtros = array(
                    'categoria' => '',
                    'preco' => '',
                    'estado' => ''
                );
                if(isset($_GET['filtros'])) {
                    $filtros = $_GET['filtros'];
                }

                $total_anuncios = $a->getTotalAnuncios($filtros);
                $total_usuarios = $u->getTotalUsuarios();

                $p = 1;
                if(isset($_GET['p']) && !empty($_GET['p'])) {
                    $p = addslashes($_GET['p']);
                }

                $por_pagina = 2;
                $total_paginas = ceil($total_anuncios / $por_pagina);

                $anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);
                $categorias = $c->getLista();

                
                $dados['total_anuncios'] = $total_anuncios;
                $dados['total_usuarios'] = $total_usuarios;
                $dados['categorias'] = $categorias;
                $dados['filtros'] = $filtros;
                $dados['anuncios'] = $anuncios;
                $dados['total_paginas'] = $total_paginas;
                //print_r($dados);
                //print_r($dados);
                $this->loadTempleteOne('home',$dados);
            }

        }




    }