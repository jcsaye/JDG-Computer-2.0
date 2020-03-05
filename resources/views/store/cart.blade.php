@extends('store.template')

@section('content')

<div class="container|76 text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart" aria-hidden="true" > Carrito de compras </i></h1>
    </div>

   <div class="table-cart">

    @if(count($cart))
  
    <a href="{{route('cart-trash',$cart)}}" class="btn btn-danger" style="font-size:24px">Vaciar carrito  <i class="fa fa-trash" style="font-size:24px" aria-hidden="true"></i></a>
   <div class="table-responsive">
       <div class="table">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Imagen</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Quitar</th>
                </tr>
            </thead>
            @foreach ($cart as $item)
            <tbody>
               
                <th><img src="/storage/{{$item->image}}" alt=""> </th>
                <td>{{$item->name}}</td>
                <td>  ${{number_format($item->price,2)}}</td>
                <td>
                    <input type="number"
                           min="1"
                           max="100"
                           value="{{$item->quantity}}"
                           id="product_{{$item->id}}"
                    >
                    <a href=""
                     class="btn btn-outline-warning btn-update-item"
                     data-href='{{route('cart-update',$item->slug)}}'
                     data-id='{{$item->id}}'
                    >
                    <i class="fa fa-refresh"></i>
                </a>
                </td>
                <td>$ {{number_format($item->price * $item->quantity,2)}}</td>
                <td>
                <a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger">
                        <i class="fa fa-remove"></i>
                    </a>
                </td>
                   
               
            </tbody>
            @endforeach
        </table><hr>

    <h3><span class="badge badge-success">total $ {{number_format($total,2)}}</span></h3>
       </div>
    </div>
   </div>
   @else
   <h3><span class="badge badge-warning">No hay Productos en el Carrito</span></h3>
   @endif
   <hr>
   <p>
    <a href="{{route('inicio')}}" class="btn btn-outline-primary">
            <i class="fa fa-chevron-circle-left"></i> seguir comprando
        </a>
    <a href="{{route('order-detail')}}" class="btn btn-outline-primary">
            continuar <i class="fa fa-chevron-circle-right"></i> 
        </a>
    
    </p>
    
</div>




@endsection