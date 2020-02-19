@extends('store.template')

@section('content')

<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart" aria-hidden="true">Detalle de producto</i></h1>
    </div>
<div class="page">
    <div class="table-responsive">
     <h3>datos del usuario</h3>
    <table class="table table-striped table-hover table-bordered">
            <tr><td>Nombre:</td><td>{{Auth::user()->name." ".Auth::user()->last_name}}</td></tr>
            <tr><td>Usuario:</td><td>{{Auth::user()->username}}</td></tr>
            <tr><td>Email:</td><td>{{Auth::user()->email}}</td></tr>
            <tr><td>Direccion:</td><td>{{Auth::user()->address}}</td></tr>
            
    </table>
    </div>
    <div class="table-responsive">
        <h3>Datos del pedido</h3>
        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>cantidad</th>
                <th>Subtotal</th>
                @foreach ($cart as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                    <td>{{number_format($item->price,2)}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{number_format($item->price * $item->quantity,2)}}</td>
                    </tr>
                @endforeach
            </tr>
    </table><hr>
    <h3>
        <span class="label label-success">
    total: {{number_format($total,2)}}    
        </span><hr>
    </h3>
    <p>
    <a href="{{route('cart-show')}}" class="btn btn-outline-primary"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true">Regresar</i></a>
    <a href="{{route('compra-exitosa')}}" class="btn btn-outline-primary"> Pagar <i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i> <i class="fa fa-cc-paypal fa-2x" aria-hidden="true"> </i></a>
    </p>
    
    </div>
</div>



</div>



    
@endsection