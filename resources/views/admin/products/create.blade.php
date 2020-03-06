@extends('admin.template')


@section('content')
{{-- 
    <form class="" action="/agregarproducto" method="post" enctype="multipart/form-data">
      {{-- <ul class="errores" style="color:red" >
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach --}}
        

      </ul>
      <div class="container">
        <div class="row">
    <div class="page-header">
     <h1>
         <i class="fa fa-shopping-basket" aria-hidden="true"></i>
         PRODUCTO <small>[agregar Producto]</small>
     </h1>
    </div>
    
        
    
        <div class="col-md-offset-3 col-md-6 ">
            
            <div class="page">
                @if (count($errors)>0)
                    @include('admin.partials.errors')
                @endif

       <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">  
      {{csrf_field()}}
      <label for="">nombre:</label>
      <input class="form-control" type="text" name="name" value="{{old('name')}}" ><br><br>
      {!!$errors->first('name',' <small>:message</small><br>')!!}

      <label for="">descripcion:</label><br>
       <textarea class="form-control" name="description" value="" rows="8" cols="70"  class="text-area">{{old('description')}}</textarea><br><br>
      {!!$errors->first('description','<small>:message</small><br>')!!}

      <label for="">extracto:</label><br>
      <input class="form-control"type="text"  name="extract" value="">{{old('extract')}}</textarea><br><br>
     {!!$errors->first('extract','<small>:message</small><br>')!!}
      
      {{-- <label for="categoria_id">categoria</label>
      <input type="text" name="categoria_id" value="{{old('categoria_id')}}" ><br><br>
      {!!$errors->first('categoria_id','<small>:message</small><br>')!!} --}}
      
      <label for="">categoria:</label>
      <select class="form-control" name="category_id" value="">
        @foreach ($categories as $category)
        <option value="{{$category['id']}}">
             {{$category['name']}}
        </option>
        @endforeach
      </select>
      <hr>


      <label for="">precio:$</label>
      <input class="form-control" type="number" name="price" value="{{old('price')}}"><br><br>
      {!!$errors->first('price','<small>:message</small><br>')!!}

      <label for="">imagen:</label>
      <input class="form-control" type="file" name="image" value="{{old('image')}}"><br><br>
      {!!$errors->first('image','<small>:message</small><br>')!!}

      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input" name="visible" id=""  checked='checked'": ""}}>
          visible
        </label>
      </div>

      <input class="btn btn-outline-primary" type="submit" name="" value="Crear">

      <a href="{{route('product.index')}}" class="btn btn-outline-danger" >Cancelar</a>
      </form> 
              </div>
          </div>
        </div>
</div>
@endsection
  
