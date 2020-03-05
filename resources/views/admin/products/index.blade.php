@extends('admin.template')

@section('content')
<div class="container-fluid">
    <div class="page-header text-center">
       <h1><i class="fa fa-shopping-cart"></i>
       PRODUCTOS <a href="{{route('product.create')}}" class="btn btn-warning"><i class="fa fa-plus-circle" aria-hidden="true">Producto</i></a>
       </h1>
    
    <h2><i class="fa fa-home fa-2x btn btn-dark" aria-hidden="true"> <a href="{{url('/admin/home')}}">home</a> </i></h2>
       <div class="text-center" > </div>
       {{ $products->links() }}
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
             <thead>
                 <tr>
                 <th>Editar</th>
                 <th>Eliminar</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 <th>Categoria</th>
                 <th>Precio</th>
                 <th>Visible</th>
                 <th>Imagen</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($products as $product)
                 <tr>
                     <td>
                     <a href="{{url('/admin/product/'.$product->slug.'/edit')}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                     </td>
                     <td>
                     <form method="post" action="{{route('product.destroy',$product['slug'])}}">
                         {{ csrf_field() }}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-danger" onclick="return confirm('¿esta seguro que desea borrar el Producto?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
                     </form>
                     </td>
                     <td>{{ $product->name}}</td>
                     <td>{{ $product->description}}</td>
                     <td>{{ $product->category['name']}}</td>
                     <td>{{ number_format($product->price,2)}}</td>
                     <td>{{ $product->visible ==1 ? "si":"no"}}</td>
                     <th><img src="/storage/{{ $product->image}}" style="width:150px;" alt=""></th>
                 </tr>
                     
                 @endforeach
             </tbody>
            </table>
        </div>
    </div>
     
    </div>
    <div class="text-center" ></div>
{{ $products->links() }}
@endsection