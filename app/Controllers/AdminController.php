<?php

    namespace App\Controllers;

use App\Models\User;
use App\Utils\Autenticar;
use App\Views\View;

    class AdminController {
        public function index() {
          View::render('Admin', ['usuarios' => User::tudo()]);
        }
        public function delete($id)
        {
          User::excluir($id);
          if ($id === $_SESSION['user']['id_usuario']) {
            redirecionar('/');
            die;
          } else {
            redirecionar('/admin');
          }
        }
      
        public function store($dados)
        {
          User::salvar($dados);
          redirecionar('/admin');
        }
      
        public static function show()
        {
          View::render('CriarUser', ['niveis' => User::$niveis]);
        }
      
        public static function edit($id)
        {
          View::render('EditarUser', ['usuario' => User::buscar($id), 'niveis' => User::$niveis]);
        }
      
        public static function update($id, $dados)
        {
          User::atualizar($id, $dados);
          if ($dados['nivel'] != 'admin' || $dados['flag_status'] != 1) {
            redirecionar('/');
            die;
          }
          redirecionar('/admin');
        }
    }