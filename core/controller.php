<?php
    class controller{

        public function loadView($viewName,$viewData = array())
        {
            extract($viewData);
            require 'views/'.$viewName.'.php';
        }
        
        
        public function loadTempleteOne($viewName,$viewData = array())
        {
            require 'views/templateOne.php';
        }

        public function loadViewInTemplateOne($viewName,$viewData = array())
        {
            extract($viewData);
            require 'views/'.$viewName.'.php';
        }

    }