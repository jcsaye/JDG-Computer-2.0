<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::paginate(5);
        // dd($categories);
        return view('admin.category.index', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $reglas=  [
            "name"=> "string|min:3|max:50|unique:categories,name|required",
            "slug"=>"string|min:3|max:50|unique:categories,name",
            "description"=> "required|string|min:3|max:255",

        ];
        $mensajes= [
            'string' => 'el campo :attribute debe ser de tipo texto.',
            "required"=>"el campo :attribute esta vacio",
            "min"=>"el campo :attribute tiene un minimo de :min caracteres",
            "unique"=>"el campo :attribute se encuentra registrado",
            "max"=>"el campo :attribute tiene un maximo de :max",
        ];
        $this->validate($request,$reglas,$mensajes);

        $categorynueva = new Category();
        // return$categorynueva->all();
        $categorynueva->name=$request['name'];
        $categorynueva->slug=$request['name'];
        $categorynueva->description= $request['description'];
        $categorynueva->save();

       return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::find($id);
        
        return view ('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        
        $category->fill($request->all());
        $category->slug=($request->get('name'));

        $update=$category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     Category::destroy($id);   
     
      return redirect()->route('category.index');
    }
}       
