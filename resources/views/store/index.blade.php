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




<div class="container-fluid ">
<div id="products">
        <div class="row">
            @forelse ($Products as $Product)
        <div class="col-xs-12  col-sm-6 col-md-3  white-panel">
           <div class="product ">
           <img class="card-img-top " style="height: 143px" src="{{$Product->image}}" alt="">
               <div class="card-body">
               <h5 class="card-title">{{$Product->name}}</h5><hr>
               <p class="card-text panel">{{$Product->description}}</p>
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


@endsection