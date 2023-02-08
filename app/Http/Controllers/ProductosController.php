<?php


namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use PDO;

class ProductosController extends Controller
{
    public function todosLosProductos()
    {
        $productos = Producto::all();

        echo '<pre>';
        echo $productos;
        echo '</pre>';
    }
    public function insertarProductos(Request $req)
    {
        // $nombre = 'Mi producto';
        // $precio = 3.99;
        // $descripcion = 'Lorem ipsum';
        // $stock = 23;

        $producto = new Producto();
        $producto->nombre = $req->input('name');
        $producto->precio = $req->input('price');
        $producto->descripcion = $req->input('description');
        $producto->stock = $req->input('stock');
        $producto->save();
    }

    public function filtradoProductos(Request $req)
    {
        if($req->has('apply')){
            $filterOption = $req->input('stockFilter');
            $condition = ($filterOption == 'greater') ? '>' : '<';
            $products = Producto::where('stock', $condition, 5)->get();
    
            // return view('filtro', ["arrayProductos" => $products]);
            return view('filtro', compact('products'));
        }
    }

}
