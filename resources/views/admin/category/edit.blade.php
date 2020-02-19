@extends('admin.template')

@section('content')
<div class="container-fluid">
    <div class="row">
<div class="page-header">
 <h1>
     <i class="fa fa-shopping-basket" aria-hidden="true"></i>
     CATEGORIA <small>[Editar categoria]</small>
 </h1>
</div>

    

    <div class="col-md-offset-3 col-md-6 ">
        
        <div class="page">
            {{-- @if (count($errors)>0)
                @include('admin.partials.errors')
            @endif --}}
          
        <form action="{{route('category.index',$category)}}" method="post">
        
            {{ csrf_field() }}
            <label for="name" >nombre:</label>
            <input placeholder="nombre de la categoria..."  type="text" name="name" value="{{$category->name}}" ><br><br>
            {!!$errors->first('name','  <small>:message</small><br>')!!}
            <hr>
            <label for="description" >descripcion:</label><br>
            <textarea  placeholder="editar descripcion" name="description" rows="10" cols="50" class="text-area" >{{$category->description}}</textarea><br><br>
            {!!$errors->first('description','<small>:message</small><br>')!!}
            <hr>
            <input class="btn btn-outline-primary" type="submit" value="actualizar" >
            <hr>
            <a class="btn btn-outline-danger" href="{{route('category.index')}}">cancelar</a>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection