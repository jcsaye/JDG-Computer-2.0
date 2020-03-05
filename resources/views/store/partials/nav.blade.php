
<nav class="navbar navbar-expand-sm navbar-dark bg-primary">

        
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <a class="navbar-brand main-title" href="#"><img class="logo" style="width:100px" src="{{asset('images/logo.png')}}" alt=""></a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="{{route('inicio')}}">inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#">conocenos</a>
        </li>
       
        
    
 <!-- Right Side Of Navbar -->

 
 
    <!-- Authentication Links -->
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
</nav>                    