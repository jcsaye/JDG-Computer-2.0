@extends('admin.template')


@section('content')


</ul>
<div class="container-fluid">
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

 <form action="{{route('product.update',$product->slug)}}" method="POST" enctype="multipart/form-data">  
{{csrf_field()}}
{{@method_field('PATCH')}}
<label for="">nombre:</label>
<input class="form-control" type="text" name="name" value="{{$product->name}}" ><br><br>
{!!$errors->first('name',' <small>:message</small><br>')!!}

<label for="">descripcion:</label><br>
 <textarea class="form-control" name="description" value="" rows="8" cols="70"  class="text-area">{{$product->description}}</textarea><br><br>
{!!$errors->first('description','<small>:message</small><br>')!!}

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
<input class="form-control" type="number" name="price" value="{{$product->price}}"><br><br>
{!!$errors->first('price','<small>:message</small><br>')!!}

<label for="">imagen:</label>
<input class="form-control" type="file" name="image" value="{{ $product->image}}" ><br><br>
{!!$errors->first('image','<small>:message</small><br>')!!}

<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="visible" id=""  checked='checked'": ""}}>
    visible
  </label>
</div>

<input class="btn btn-outline-primary" type="submit" name="" value="Actualizar">

<a href="{{route('product.index')}}" class="btn btn-outline-danger" >Cancelar</a>
</form> 
        </div>
    </div>
  </div>
</div>
    
@endsection