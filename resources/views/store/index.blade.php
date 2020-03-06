@extends('store.template')


@section('content')


<div class="container-fluid">
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
              
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="carrousel/carrousel5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
             
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
{{ $Products->links() }}
<div id="products">
        <div class="row">
            @forelse ($Products as $Product)
        <div class="col-xs-6  col-sm-6 col-md-3  white-panel">
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

<section class="productos">
  <div class="muestra container-fluid mt-3">
  <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/storage/banner-compu.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">COMPUTADORAS </strong>Las computadoras nos permiten resolver muchas tareas importantes de cada día.Te explicamos qué es una computadora, los elementos que la compon/storageen y su invención. Conocé cuáles son las marcas recomendadas y sus mejores modelos.
        </p>
        </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/storage/banner-monitor.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">MONITORES </strong>Seleccioná y compará las características y últimas innovaciones en los nuevos monitores led y monitores curvos. ¡Encontrá el monitor perfecto para vos!
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/storage/banner-notebook.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">NOTEBOOKS </strong>Conseguí notebooks para diseño, notebooks gamer, notebooks 14 pulgadas, notebooks 17 pulgadas y comprá al mejor precio. Te Ofrecemos Las Notebooks Con La Ultima Tecnología En Procesadores! Marcas Oficiales
        </p>
      </div>
      {{-- <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-monitor.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">MONITORES </strong>Seleccioná y compará las características y últimas innovaciones en los nuevos monitores led y monitores curvos. ¡Encontrá el monitor perfecto para vos!
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner-impresora.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">IMPRESORAS </strong>Las impresoras son excelentes herramientas para el trabajo, el hogar y el colegio. Obtené imágines increíbles con las mejores impresoras multifunción e impresora láser.
      </div>
      <div class="col-sm-12 col-md-6 col-lg-4 p-3">
        <img class="img-fluid" src="/images/banner--redes.jpg" alt="compu">
        <p class="text-justify p-2"><strong class="h2">OPTIMIZACION DE REDES </strong>Configuración de seguridad para prevenir accesos no autorizados. Instalación de impresoras wireless y extensores de señal. Diseño, instalación, configuración y mantenimiento.
        </p>
      </div> --}}
    </div>
  </div>
</section>

<section class="servicio">
  <div class="container-fluid">
    <div class="row justify-content-center  ">
      <div class="servicio d-flex justify-content-center col-xl-6 col-sm-6 col-lg-6">
        <img class=" img-fluid" src="/images/pc--gamer.jpg" alt="game">
      </div>
      <div class=" servicio d-flex justify-content-center col-xl-6 col-sm-6 col-lg-6">
        <p class="text-justify p-4 m-2 bg-primary"><strong class="h2" style="color:white">MUNDO GAMERS 
          </strong>Los mejores jugadores de combos de computadoras. Elegi con confianza y 
          empeza a jugar en un mundo del entretenimiento hecho a tu medida. A otro nivel, 
          Pagina dedicada al mundo gamer. Especializada en la venta de hardware. Nuestros 
          clientes nos buscan porque tenemos los mejores precios del mercado, tenemos una 
          gran cantidad de opciones para elegir en un mercado que es muy amplio.
              
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
          <p class="text-justify"><strong>Diagnóstico y reparación de PC, servidores y Notebooks.
            Optimización y limpieza de virus y spyware. Instalación de periféricos: impresoras, scanners, webcams y otros.</strong>
          </p>
        </div>
      </div>

      <div class=" text-center col-xs-3 col-xl-3 col-lg-3 bg-info">
        <div class="circulo m-3">
          <i class="fa fa-edit fa-3x"></i>
          <h2 class="mt-1">DISEÑO WEB</h2>
        </div>
        <div class="">
          <p class="text-justify">Diseño de Imágen Corporativa, Planes a su Medida. Posicionamiento en Buscadores. Empresa de desarrollo de sitios web, Atención Personalizada en todo el país. Planes Economicos. Sitios Web a Medida. Amplie sus ventas.
          </p>
        </div>
      </div>

      <div class=" text-center col-xs-3 col-xl-3 col-lg-3 bg-info">
        <div class="circulo m-3">
          <i class="fa fa-windows fa-3x"></i>
          <h2 class="mt-1">SOFTWARE LEGAL</h2>
        </div>
        <div class="">
          <p class="text-justify">Es una iniciativa de las grandes empresas creadoras de software nacional e internacional para proteger los derechos de autor y la propiedad intelectual.
          </p>
        </div>
      </div>

      <div class=" text-center col-xs-3 col-xl-3 col-lg-3 bg-info">
        <div class="circulo m-3">
        <i class="fa fa-rocket fa-3x" aria-hidden="true"></i>
          <h2 class="mt-1">HOSTING SERVER</h2>
        </div>
        <div class="">
          <p class="text-justify">Hospeda tu sitio web en Hostinger y experimenta un hosting con tecnología de punta. Hosting rápido y seguro ¡El mejor precio del 2019 garantizado!
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>  

</div>
@endsection