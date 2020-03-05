@extends('admin.template')


@section('content')


</ul>
<div class="container">
  <div class="row">
<div class="page-header">
<h1>
   <i class="fa fa-shopping-basket" aria-hidden="true"></i>
  USUARIO <small>[agregar Usuario]</small>
</h1>
</div>

  

  <div class="col-md-offset-3 col-md-6 ">
      
      <div class="page">
          @if (count($errors)>0)
              @include('admin.partials.errors')
          @endif

          <form action="{{route('user.update',$users['id'])}}" method="post" enctype="multipart/form-data">  
            {{csrf_field()}}
            {{@method_field('PATCH')}}
            <label for="">nombre:</label>
            <input class="form-control" type="text" name="name" value="{{$users->name}}" ><br><br>
            {!!$errors->first('name',' <small>:message</small><br>')!!}
        
            <label for="">apellido:</label><br>
             <input class="form-control" type="text" name="last_name" value="{{$users->last_name}}"><br><br>
            {!!$errors->first('last_name','<small>:message</small><br>')!!}
        
            <label for="">nombre de usuario:</label><br>
            <input class="form-control" type="text"  name="username" value="{{$users->username}}"><br><br>
            {!!$errors->first('username','<small>:message</small><br>')!!}
            
            
            <label for="">email:</label>
            <input class="form-control" type="email" name="email" value="{{$users->email}}"><br><br>
            {!!$errors->first('email','<small>:message</small><br>')!!}
        
            <label for="">contraseña:</label>
            <input class="form-control" type="password" name="password" value="{{$users->password}}"><br><br>
            {!!$errors->first('password','<small>:message</small><br>')!!}
        
            <label for="">confirmar contraseña:</label>
            <input class="form-control" type="password" name="password" value="{{$users->password}}"><br><br>
            {!!$errors->first('password','<small>:message</small><br>')!!}
        
             
    <label for="type">Rol</label>
    <select class="form-control" name="type" value="">
     
      <option value="admin">
        admin
      </option>
      <option value="user">
        user
      </option>
      
    </select>
    <hr>
            <input class="btn btn-outline-primary" type="submit" name="" value="Actualizar">
        
            <a href="{{route('user.index')}}" class="btn btn-outline-danger" >Cancelar</a>
            </form> 
        </div>
    </div>
  </div>
</div>
    
@endsection