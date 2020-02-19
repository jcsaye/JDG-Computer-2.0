@extends('admin.template')


@section('content')
    
<div class="container-fluid">
    <div class="page-header text-center">
       <h1><i class="fa fa-shopping-cart"></i>
       PRODUCTOS <a href="{{route('product.create')}}" class="btn btn-warning"><i class="fa fa-plus-circle" aria-hidden="true">productos</i></a>
       </h1>
       <div class="text-center" > {{ $products->links() }}</div>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
             <thead>
                 <tr>
                 <th>Editar</th>
                 <th>Eliminar</th>
                 <th>Imagen</th>
                 <th>Nombre</th>
                 <th>Categoria</th>
                 <th>Extracto</th>
                 <th>Precio</th>
                 <th>Visible</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($products as $product)
                 <tr>
                     <td>
                     <a href="{{url('/admin/products/'.$product->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                     </td>
                     <td>
                     <form method="post" action="#">
                         {{ csrf_field() }}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-danger" onclick="return confirm('¿esta seguro que desea borrar la categoria?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
                     </form>
                     </td>
                     <th><img src="{{$product->image}}" alt="" style="width:100px;"> </th>
                     <td>{{ $product->name}}</td>
                     <td>{{ $product->category->name}}</td>
                     <td>{{ $product->extract}}</td>
                     <td>{{ number_format($product->price,2)}}</td>
                     <td>{{ $product->visible==1 ? 'si':'no'}}</td>
                 </tr>
                     
                 @endforeach
             </tbody>
            </table>
        </div>
    </div>
     
    </div>
    <div class="text-center" > {{ $products->links() }}</div>
</div>

    



@endsection
