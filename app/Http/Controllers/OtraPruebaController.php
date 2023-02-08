<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtraPruebaController extends Controller
{
    public function prueba2(){
        // echo 'Esto es la prueba 2';
        $data = [
            'user' => 'Hugo',
            'email' => 'email@email.com',
            'hobbies' => ['1', '2']
        ];
        // view(nombre_archivo_blade.php, $datos_a_pasar)
        return view('prueba', $data);
    }
}
