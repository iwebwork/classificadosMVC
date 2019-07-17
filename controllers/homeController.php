<?php
    class homeController extends controller{

        public function index()
        {
            $a = new Anuncios();
            $u = new Usuarios();
            $c = new Categorias();

            $u->getNomeUsuario($_SESSION['cLogin']);

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

            $dados = array(
                'total_anuncios' => $total_anuncios,
                'total_usuarios' => $total_usuarios,
                'categorias' => $categorias,
                'filtros' => $filtros,
                'anuncios' => $anuncios,
                'total_paginas' => $total_paginas
            );
            $this->loadTempleteOne('home',$dados);

        }




    }