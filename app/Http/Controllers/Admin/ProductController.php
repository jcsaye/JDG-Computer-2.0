<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Category;
use Illuminate\Mail\Message;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
       
        // dd($products);
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
       $categories= Category::all();
       $product = Product::all();
       return view ('admin.products.create', compact('categories','product'));
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
    "name"=> "required|string|min:3|max:100",
    "description"=> "required|string|max:5000",
    "category_id"=>"integer",
    "extract"=>"string",
    "price"=>"numeric|required|max:5000000",
    "visible"=>"integer",
    "image"=>"required|file"
];



  $message = [
  "string"=>"el campo :attribute   debe ser de tipo texto",
  "min"=>"el campo :attribute tiene un minimo de :min",
  "unique"=>"el campo :attribute se encuentra registrado",
  "max"=>"el campo :attribute tiene un maximo de :max",
  "numeric"=>"el campo :attribute debe ser un numero",
  "integer"=>"el campo :attribute debe ser un numero entero",
  "file"=>"el campo :attribute debe ser una imagen",
  "required"=>"el campo :attribute esta vacio."

];

  $this->validate($request, $reglas, $message);

   $productoNuevo= new Product();

   $ruta=$request->file('image')->store('public');
   $nombreArchivo=basename($ruta);

   $productoNuevo->image= $nombreArchivo;
   $productoNuevo->name = $request['name'];
   $productoNuevo->slug= $request->get('name');
   $productoNuevo->description=$request['description'];
   $productoNuevo->category_id = $request['category_id'];
   $productoNuevo->extract = $request['extract'];
   $productoNuevo->price = $request['price'];
   $productoNuevo->visible= $request->has['visible'] ? 1 : 0;

   $update= $productoNuevo->save();
   $message = $update ? "producto creado correctamente" : "El producto no pudo crearse";
  
  
   return redirect()->route('product.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {   

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product){
       
        $categories=Category::all();
        return view('admin.products.edit',compact('product','categories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $product->fill($request->all());
        $product->slug=($request->get('name'));

        $ruta=$request->file('image')->store('public');
        $nombreArchivo=basename($ruta);
        $product->image= $nombreArchivo;

        $product->visible= $request->has('visible')?1:0;
        $categories=Category::all();
        $update=$product->save();
        
        $message = $update ? "producto actualizado correctamente" : "El producto no pudo actualizarse";

        return redirect()->route('product.index', compact('categories','product'))->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
{
    // $id= $product["id"];

    // $product = Product::find($id);
  
    // $product->delete();
    $deleted = $product->delete();
    $message= $deleted ? 'producto elimminado correctamente' : 'el producto no pudo eliminarce';
    return redirect()->route("product.index")->with('message', $message);
  
}
}
