<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
  

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        
        
        {{-- <link rel="stylesheet" href="/css/fontawesome.css"> --}}
        {{-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/darkly/bootstrap.min.css" rel="stylesheet" integrity="sha384-rCA2D+D9QXuP2TomtQwd+uP50EHjpafN+wruul0sXZzX/Da7Txn4tB9aLMZV4DZm" crossorigin="anonymous"> --}}
        
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-oOs/gFavzADqv3i5nCM+9CzXe3e5vXLXZ5LZ7PplpsWpTCufB7kqkTlC9FtZ5nJo" crossorigin="anonymous">   
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{asset('css/main.css')}}"rel="stylesheet" >
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="card text-center">
        <div class="card-header badge-success">
         <h1><i class="fa fa-shopping-bag" aria-hidden="true">!!!compra exitosa</i></h1>
        </div>
        @foreach ($cart as $item)
            
       
        <div class="card-body">
        <img src="{{$item->image}}" alt="" style="width:100px">
        <h5 class="card-title">cantidad: {{$item->quantity}}</h5>
        {{-- <p class="card-text">{{$item->description}}</p> --}}
         
        </div>
        @endforeach
        <h2><a href="{{route('inicio')}}" class="badge badge-danger"> <i class="fa fa-home fa-2x
            " aria-hidden="true">regresar</i></a></h2>
      </div>
 
                <footer class="container-fluid card-footer " >
                    <div class="row card-group">
                        <div class="item col-md-4">
                            <h3>Mi tienda</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur 
                            adipisicing elit. Nisi esse officiis aperiam
                             iste similique est nobis nesciunt commodi nemo
                             saepe quia cupiditate amet ut quos fuga doloribus, accusamus voluptas illo?</p>
                        </div>
                        <div class="item col-md-4">
                            <h3>JDG-COMPUTER</h3>
                            <div class="authr-info">
                            <img style="width:80px" src="https://previews.123rf.com/images/yupiramos/yupiramos1609/yupiramos160912772/62358512-avatar-hombre-sonriendo-dibujos-animados-con-barba-usuario-de-la-persona-masculina-ilustraci%C3%B3n-vectoria.jpg" alt="" class="avatar">
                            <p><a href="">@gamil.com</a> Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque earum possimus quas ipsa nam maiores delectus. Ipsam deleniti eveniet aspernatur.</p>
                            
                        </div>
                        </div>
                        <div class="item col-md-4">
                            <h3>Siguenos</h3>
                            <ul class="redes">
                                <li>
                                    <a href=""><i class="red fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="red fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="red fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="red fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="red fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>
                                </li>
                                
                            </ul>
                            <h3>escribenos</h3>
                            <i class="fa fa-at    "></i><a href="">JDG-computer@gmail.com</a>
                        </div>
                    </div>
                </footer>
                
    


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootlint/1.0.0/bootlint.min.js" integrity="sha384-N+BTm0BCfumqkjdZt552I0kBBcMzkYe8aWUaSqL13fGJEGVhOi0rljWKtlU6sC6Z" crossorigin="anonymous"></script>
            <script src="{{asset('js/pinterest_grid.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>        
</body>
</html>