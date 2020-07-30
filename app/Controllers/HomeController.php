<?php   
    namespace App\Controllers;

    use App\Views\View;

    class HomeController {

        public function index($message = []) {
            unset($_SESSION['user']);
            View::render('Home', $message, false);
        }
    }