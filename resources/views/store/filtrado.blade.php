@extends('store.template')


@section('content')



{{ $products->links() }}



<div class="container-fluid ">
    <button class="btn btn-outline-danger">
        <a class="nav-link dropdown-toggle " href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categorias</a>
      <div class="dropdown-menu" aria-labelledby="dropdownId">
          @foreach ($categories as $category)
      <a class="dropdown-item" href="{{route('store-filtrado',$category->id)}}" >{{$category->name}}</a>
          @endforeach
      </div>
     </button>
  <hr>
<div id="products">
        <div class="row">
            @forelse ($products as $Product)
        <div class="col-xs-12  col-sm-6 col-md-3  white-panel">
           <div class="product ">
           <img class="card-img-top " style="height: 143px" src="/storage/{{$Product->image}}" alt="">
               <div class="card-body">
               <h5 class="card-title">{{$Product->name}}</h5><hr>
               <p class="card-text panel">{{$Product->extract}}</p>
               <h4>precio: $ {{$Product->price}}</h4>
               <button type="submit" class="btn btn-outline-warning"
                name=""><a href="{{route('product-datail',$Product->slug)}}"><i class="fa fa-info-circle" aria-hidden="true"></i> leer más</a></button>

               <button type="submit" class="btn btn-outline-warning" name=""><a href="{{route('cart-add',$Product->slug)}}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> lo quiero
                    </a></button>
               </div>
           </div>
           
        </div>
        @empty
        <p>no hay productos</p>
    
        @endforelse   
       
        </div>
       

</div>
</div>
<hr>
{{ $products->links() }}

@endsection