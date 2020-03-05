@extends('store.template')

@section('content')

    <h1>Detalle de producto</h1>
   
    <div class="product-block">
    <img src="/storage/{{$Product->image}}" style="width:350px" alt="">
    </div>
    <div class="product-block">
    <h3>{{$Product->name}}</h3>
    <div class="product-info">
    <p>{{$Product->description}}</p>
    <p>precio:${{$Product->price}}</p>
    <p>
    <a href="{{route('cart-add',$Product['slug'])}}"class="btn btn-outline-primary">lo quiero</a>
    </p>
    </div>
    </div>
    <a href="{{route('inicio')}}" class="btn btn-outline-primary ">
      <i class="fa fa-chevron-circle-left"></i> Regresar
  </a>

{{-- <button class="btn btn-warning"><a href="{{route('inicio')}}">Regresar</a></button> --}}
{{-- <div class="container">
    <div class = "tarjeta mb-3" style="width:400px">
        <h3 class = "card-header"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> {{$Product->name}} </font> </font> </ h3 >
        <div class = "card-body">
          <h5 class = "card-title"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Tratamiento especial de título </font> </font> </ h5>
          <h6 class = "card-subtitle text-muted"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Subtítulo de tarjeta de soporte </font> </ fuente> </h6>
        </div>
        <img style = "height: 200px; width: 300px; display: block;" src = "{{ $Product->image}} "alt =" Imagen de la tarjeta ">
        <div class = "card-body">
          <p class = "card-text"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">{{$Product->description}} </font> </font> </p>
        </div>
        <ul class = "list-group list-group-flush">
          <li class = "list-group-item"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">Precio : ${{$Product->price}}</font> </font> </li>
          <li class = "list-group-item"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">{{$Product->slug}}</font> </font> </li>
          <li class = "list-group-item"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> {{$Product->category_id}} </font> </font> </li>
        </ul>
        <div class = "card-body">
          <a href="{{route('cart-add',$Product->slug)}}" class="card-link"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> lo quiero</font> </ fuente> </a>
        <a href="{{route('inicio')}}" class="card-link"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> inicio </font> </ font > </a>
        </div>
        <div class = "card-footer text-muted"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;">
          hace 2 días
        </font></font> </div>
      </div>
      <div class = "tarjeta">
        <div class = "card-body">
          <h4 class = "card-title"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Título de la tarjeta </font> </font> </ h4>
          <h6 class = "card-subtitle mb-2 text-muted"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Subtítulo de tarjeta </font> < / font> </h6>
          <p class = "card-text"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Algún texto de ejemplo rápido para construir sobre el título de la tarjeta y conformar la mayor parte del contenido de la tarjeta. </font> </font> </p>
          <a href="#" class="card-link"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Enlace de tarjeta </font> </ fuente> </a>
          <a href="#" class="card-link"> <font style = "vertical-align: heredar;"> <font style = "vertical-align: heredar;"> Otro enlace </font> </ font > </a>
        </div>
      </div>
</div> --}}
@endsection