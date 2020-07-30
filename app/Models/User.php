<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class User {

      public static $niveis = [
          'user' => 'Usuário', 
          'admin' => 'Administrador'
        ];

        public static function tudo() {
            $sql = "SELECT * FROM usuarios";
            return DB::query($sql);
        }

        public static function disponiveis() {
            $sql = "SELECT * FROM usuarios WHERE flag_status = '1'";
            return DB::query($sql);
        }

        public static function salvar($request) {
            $request['senha'] = md5($request['senha']);
            $request['flag_status'] = 1;
            foreach ($request as $key => $value) {
                $values[] = "'{$value}'";
                $keys[] = $key;
            }
            $sql = "INSERT INTO usuarios (" . implode(', ', $keys) . ") VALUES 
                (" . implode(', ', $values) . ");";  
            return DB::query($sql);
        }

        public static function atualizar($id, $request) {
            if (empty($request['trocar_senha'])) unset($request['senha']);
            else {
                $request['senha'] = md5($request['senha']);
                unset($request['trocar_senha']);
            }

            if (empty($request['flag_status'])) $request['flag_status'] = 0;

            foreach ($request as $key => $value) $sets[] = "{$key} = '{$value}'";
            $sql = "UPDATE usuarios SET " . implode(', ', $sets) . " WHERE id_usuario = {$id}";  
            return DB::query($sql);
        }
        

        public static function excluir($id) {
            $sql = "DELETE FROM usuarios WHERE id_usuario = {$id}"; 
            return DB::query($sql);
        }

        public static function buscar($id) {
            $sql = "SELECT * FROM usuarios WHERE id_usuario = {$id}"; 
            return DB::query($sql)[0];
        }
    }