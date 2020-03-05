@extends('store.template')


@section('content')



<div class="carrousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="carrousel/carrousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle " href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria</a>
      <div class="dropdown-menu" aria-labelledby="dropdownId">
          @foreach ($categories as $category)
      <a class="dropdown-item" href="{{route('store-filtrado',$category->id)}}" >{{$category->name}}</a>
          @endforeach
      </div>
     </li>
<hr>
{{ $Products->links() }}

<div class="container-fluid ">
<div id="products">
        <div class="row">
            @forelse ($Products as $Product)
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
{{ $Products->links() }}

<section class="servicio">
  <div class="container-fluid">
    <div class="row justify-content-center  ">
      <div class="servicio d-flex justify-content-center col-xl-6 col-sm-6 col-lg-6">
        <img class=" img-fluid" src="/images/pc--gamer.jpg" alt="game">
      </div>
      <div class="d-flex justify-content-center col-xl-6 col-sm-16 col-lg-6">
        <p class="text-justify p-4 m-2 bg-primary"><strong class="h2">MUNDO GAMERS </strong>Los mejores jugadores de combos de computadoras. Elegi con confianza y empeza a jugar en un mundo del entretenimiento hecho a tu medida. A otro nivel, Pagina dedicada al mundo gamer. Especializada en la venta de hardware. Nuestros clientes nos buscan porque tenemos los mejores precios del mercado, tenemos una gran cantidad de opciones para elegir en un mercado que es muy amplio.
              
        </p>
      </div>
    </div>
  </div>
  
</section>
<section class="Servicios">
  <div class="muestra container-fluid mt-5">

  <div class="row d-flex justify-content-center m-3 bg-info">
      <div class=" text-center col-xs-3 col-xl-3 col-lg-3">
        <div class="circulo m-3">
          <i class="fa fa-desktop fa-3x"></i>
          <h2 class="mt-1">SOPORTE TECNICO</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>

      <div class=" text-center col-xs-3 col-xl-3 col-lg-3 bg-info">
        <div class="circulo m-3">
          <i class="fa fa-edit fa-3x"></i>
          <h2 class="mt-1">DISEÑO WEB</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>

      <div class=" text-center col-xs-3 col-xl-3 col-lg-3 bg-info">
        <div class="circulo m-3">
          <i class="fa fa-windows fa-3x"></i>
          <h2 class="mt-1">SOFTWARE LEGAL</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>

      <div class=" text-center col-xs-3 col-xl-3 col-lg-3 bg-info">
        <div class="circulo m-3">
        <i class="fa fa-rocket fa-3x" aria-hidden="true"></i>
          <h2 class="mt-1">HOSTING SERVER</h2>
        </div>
        <div class="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,labore et dolore magna Duis aute irure dolor in r adipisicing elit. Voluptatibus, corrupti. lorem
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>  


@endsection