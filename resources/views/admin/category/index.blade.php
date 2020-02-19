@extends('admin.template')


@section('content')
    
<div class="container-fluid">
    <div class="page-header text-center">
       <h1><i class="fa fa-shopping-cart"></i>
       CATEGORIAS <a href="{{route('category.create')}}" class="btn btn-warning"><i class="fa fa-plus-circle" aria-hidden="true">categoria</i></a>
       </h1>
       <div class="text-center" > {{ $category->links() }}</div>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
             <thead>
                 <tr>
                 <th>Editar</th>
                 <th>Eliminar</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($category as $category)
                 <tr>
                     <td>
                     <a href="{{url('/admin/category/'.$category->id.'/edit')}}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                     </td>
                     <td>
                     <form method="post" action="{{route('category.destroy',$category)}}">
                         {{ csrf_field() }}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-danger" onclick="return confirm('¿esta seguro que desea borrar la categoria?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
                     </form>
                     </td>
                     <td>{{ $category->name}}</td>
                     <td>{{ $category->description}}</td>
                 </tr>
                     
                 @endforeach
             </tbody>
            </table>
        </div>
    </div>
     
    </div>
    {{-- <div class="text-center" > {{ $category->links() }}</div> --}}
</div>

    



@endsection
