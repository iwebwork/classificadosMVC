<?php
    class Core{

        public function run()
        {

            /*1 = controller = galeriaController
            2 = action = index por padrão = mas pode ter home, contato e etc
            3,4,endiante = parametros = podem ser enviados vazios tambem
            */

            $url = '/';
            $params = array();
            if(isset($_GET['url'])){
                $url .= $_GET['url']; 
            }

            if(!empty($url && $url != '/')){
                $url = explode('/',$url);
                array_shift($url);
                
                $currentController = $url[0].'Controller';
                array_shift($url);

                if(isset($url[0]) && !empty($url[0])){
                    $currentAction = $url[0];
                    array_shift($url);
                }else{
                    $currentAction = 'index';
                }

                if(count($url) > 0){
                    $params = $url;
                }

                
            }else{
                $currentController = 'homeController';
                $currentAction = 'index';
            }
            
            $c = new $currentController();

            //Função do php usada quando não sabemos o nome dela
            //Com ela podemos inclusive passar parametros sem problemas
            call_user_func_array(array($c,$currentAction),$params);


        }

    }