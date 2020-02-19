<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<div class="container">
    <div class="row">
        <a class="navbar-brand">Brand</a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-primary" href="{{route('product.index')}}">Productos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-outline-primary" href="{{route('category.index')}}" tabindex="-1" aria-disabled="true">Categorias</a>
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
        </ul>
    </div>
    </div>
</div>
</nav>