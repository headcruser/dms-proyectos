<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class HomeController extends Controller
{
    public function index()
    {
        $defaultProducto = asset('img/default-product.png');

        return view('home', [
            'productos'         => [],
            'defaultProducto'   => $defaultProducto,
        ]);
    }
}
