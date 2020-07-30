<?php   
    namespace App\Controllers;

    use App\Views\View;
    use App\Models\Usuario;

    class LoginController {

        public function index($message = []) {
            unset($_SESSION['user']);
            View::render('Login', $message, false);
        }

        public function login($request) {

            $usuario = Usuario::autenticar($request['email'], $request['senha']);
            if ($usuario) { //EXISTE USUARIO
                $_SESSION['user'] = $usuario;
                redirecionar('/admin');
            }
            else { //ERROU SENHA OU EMAIL
                $this->index(['mensagem' => "E-mail ou senha incorreto!"]);
            }
        }
    }