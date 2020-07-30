<?php
    namespace App\Utils;

    class Autenticar {

        public static function verificar($nivel = 'admin', $pagina = '/') {
            if (!$nivel) $nivel = $_SESSION['user']['nivel']; 
            if (
                $_SESSION['user']['nivel'] != $nivel || 
                !$_SESSION['user']['flag_status'] ||
                empty($_SESSION['user']['id_usuario'])
            ) {
                redirecionar($pagina);
            }
        }
    }