<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $users = User::paginate(5);
        // dd($users);
        return view ('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view ('admin.users.create',compact('users'));
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
    "last_name"=> "required|string|min:3|max:100",
    "username"=>"required|string|min:3|max:10",
    "email"=>"required|unique:users,email",
    "password"=>"string|required|min:6|max:10",
    "type"=>"required",
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

   $nuevoUser= new User();

   $nuevoUser->name = $request['name'];
   $nuevoUser->last_name= $request['last_name'];
   $nuevoUser->username=$request['username'];
   $nuevoUser->email = $request['email'];
   $nuevoUser->password= $request['password'];
   $nuevoUser->password = $request['password'];
   $nuevoUser->type= $request['type'] ;

   $update= $nuevoUser->save();
   $message = $update ? "usuario creado correctamente" : "El usuario no pudo crearse";
  
  
   return redirect()->route('user.index')->with('message', $message);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $users=User::all();
       return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find($id);
        
        return view ('admin.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $user->fill($request->all());
       

        $update=$user->save();

        return redirect()->route('user.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $deleted = $user->delete();
        
        $message = $deleted ? 'Usuario eliminado correctamente!' : 'El Usuario NO pudo eliminarse!';
        
        return redirect()->route('user.index')->with('message', $message);
    }
}
