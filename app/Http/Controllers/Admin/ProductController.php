<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::orderBy('id','asc')->paginate(5);

        return view ('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        dd($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
  $reglas=  [
    "nombre"=> "string|min:3|max:100|unique:productos,nombre",
    "descripcion"=> "string|max:255",
   "categoria"=>"integer",
    "stock"=>"integer|min:1",
    "precio"=>"numeric",
    "imagen"=>"file"
];



  $mensajes = [
  "string"=>"el campo :attribute   debe ser de tipo texto",
  "min"=>"el campo :attribute tiene un minimo de :min",
  "unique"=>"el campo :attribute se encuentra registrado",
  "max"=>"el campo :attribute tiene un maximo de :max",
  "numeric"=>"el campo :attribute debe ser un numero",
  "integer"=>"el campo :attribute debe ser un numero entero",
  "imagen"=>"el campo :attribute debe ser una imagen"

];

  $this->validate($req, $reglas, $mensajes);

   $productoNuevo= new Producto();

   $ruta=$req->file('imagen')->store('public');
   $nombreArchivo=basename($ruta);

   $productoNuevo->imagen= $nombreArchivo;
   $productoNuevo->nombre = $req['nombre'];
   $productoNuevo->descripcion = $req['descripcion'];
   $productoNuevo->categoria_id = $req['categoria'];
   $productoNuevo->stock = $req['stock'];
   $productoNuevo->precio = $req['precio'];


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
