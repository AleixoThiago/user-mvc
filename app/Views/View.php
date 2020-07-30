<?php
    namespace App\Views;

use App\Utils\Autenticar;

class View {
        
        public static function render($viewName, array $data = [], $autenticar = ['admin', '/']) {
            
            if ($autenticar) Autenticar::verificar($autenticar[0], $autenticar[1]);

            ob_start();
            require_once("TemplateView.php");
            $page = ob_get_clean();

            ob_start();
            if($viewName !== null){
                extract($data);
                require_once("{$_SERVER['DOCUMENT_ROOT']}/app/Views/{$viewName}View.php");  
            }

            $page = str_replace("#MAIN#", ob_get_clean(), $page);
            
            echo $page;
        }
    }