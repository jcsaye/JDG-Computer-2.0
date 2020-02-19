
<nav class="navbar ">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
           
            <a class="navbar-brand main-title" href="#"><img class="logo" style="width:100px" src="{{asset('images/logo.png')}}" alt=""></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{route('inicio')}}">inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pedidos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">Productos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">Categoria</a>
            </li>
            @guest
            <li class="nav-item ">
                
                <a  class="nav-link" href="{{route('cart-show')}}">Carrito <i class="fa fa-cart-arrow-down"  aria-hidden="true"></i></a>
            </li>
            <li class="nav-item ">
                
                <a class="nav-link " href="{{ route('login') }}">Ingresa <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                <a class="nav-link " href="{{ route('register') }}">Registrate <i class="fa fa-registered" aria-hidden="true"></i></a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown bg-primary">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                </a>
    
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        
                        {{ @csrf_field() }}
                    </form>
                </div>
            </li>
        @endguest
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="{{route('cart-show')}}" >Consolas</a>
                    <a class="dropdown-item" href="#">Celulares</a>
                </div>
            </li> --}}
            
        
     <!-- Right Side Of Navbar -->
    
     
    
        <!-- Authentication Links -->

    </ul>
    
    
        
    
    </div>
    </nav>                    