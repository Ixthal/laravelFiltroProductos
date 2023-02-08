<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function findUsersById($id)
    {

        $users = [
            [
                "name" => "Juan",
                "email" => "juan@gmail.com",
                "tipo" => "normal",
                "hobbies" => ["jugar al fútbol", "leer novelas"]
            ],
            [
                "name" => "María",
                "email" => "maria@gmail.com",
                "tipo" => "vip",
                "hobbies" => ["cocinar", "ver películas"]
            ],
            [
                "name" => "Pedro",
                "email" => "pedro@gmail.com",
                "tipo" => "normal",
                "hobbies" => ["andar en bicicleta", "jardinería"]
            ],
        ];
        // print("<pre>".print_r($users,true)."</pre>");
        // echo "El usuario a buscar es: $id";
        $datos=$users[$id-1];
        return view('user', $datos);
    }
}
