<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" ><img class="logo" style="width:100px" src="{{asset('images/logo.png')}}" alt=""></a>
    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link btn btn-primary" href="{{'/'}}">inicio<span class="sr-only ">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link btn btn-primary" href="{{'/'}}">Conocenos<span class="sr-only ">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link btn btn-primary" href="{{'/preguntas'}}" >preguntas frecuentes<span class="sr-only ">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link btn btn-primary" href="#">servicios<span class="sr-only ">(current)</span></a>
            </li>

            
    <!-- Authentication Links -->
    @guest
    <li class="nav-item ">
        
        <a  class="nav-link " href="{{route('cart-show')}}">Carrito <i class="fa fa-cart-arrow-down fa-2x"  aria-hidden="true"></i></a>
    </li>
    <li class="nav-item ">
        
        <a class="nav-link " href="{{ route('login') }}">Ingresa <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
        <a class="nav-link " href="{{ route('register') }}">Registrate <i class="fa fa-registered fa-2x" aria-hidden="true"></i></a>
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
    {{-- <li class="nav-item ">
        
        <a  class="nav-link btn button-red " href="{{url('admin/home')}}">admin</a>
    </li> --}}

</nav>