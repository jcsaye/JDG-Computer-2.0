@extends('admin.template')

@section('content')


    <div class="page-header text-center">
       <h1><i class="fa fa-rocket" aria-hidden="true"></i>
    Control de usuario 
       <h1><a href="{{route('inicio')}}" class="btn btn-light">pagina principal</a></h1>
       {{-- <h2>bienvenido {{ Auth::user()->name }} al panel de administracion</h2> --}}
       <div class="text-center" ></div>
       
       <div class="container-fluid">
        <div class="table-responsive">
        <div class="container-fluid">
     
         <div class="row">
             <div class="col-md-4 tablero">
                 <div class="panel">
             <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
            <a href="{{url('/admin/user')}}" class="btn btn-warning btn block btn-home-admin"><h3>Usuarios</h3></a>
             </div>
             </div>
             <div class="col-md-4 tablero">
                 <div class="panel">
             <i class="fa fa-product-hunt fa-3x" aria-hidden="true"></i>
             <a href="{{url('/admin/product')}}" class="btn btn-warning btn block btn-home-admin"> <h3>Productos</h3></a>
            </div>
             </div>
             <div class="col-md-4 tablero">
                 <div class="panel">
              <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
              <a href="{{route('category.index')}}" class="btn btn-warning btn block btn-home-admin"><h3>Categorias</h3></a>
              </div>
             </div>
         </div>
        </div>
    </div>
     
    </div>
    {{-- <div class="text-center" > {{ $category->links() }}</div> --}}
</div>

    



    
@endsection