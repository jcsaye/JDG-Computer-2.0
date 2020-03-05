@extends('admin.template')

@section('content')
    
   
<div class="container-fluid">
    <div class="page-header text-center">
       <h1><i class="fa fa-user-secret" aria-hidden="true"></i>
       Usuarios <a href="{{route('user.create')}}" class="btn btn-warning"><i class="fa fa-plus-circle" aria-hidden="true">usuarios</i></a>
       </h1>
       <div class="text-center" > {{ $users->links() }}</div>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
             <thead>
                 <tr>
                 <th>Editar</th>
                 <th>Eliminar</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th> Usuario</th>
                 <th>Email</th>
                 <th>direccion</th>
                 <th>tipo de usuario</th>

                 </tr>
             </thead>
             <tbody>
                 @foreach ($users as $user)
                 <tr>
                     <td>
                     <a href="{{route('user.edit',$user['id'])}}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                     </td>
                     <td>
                     <form method="post" action="{{route('user.destroy',$user['id'])}}">
                         {{ csrf_field() }}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-danger" onclick="return confirm('¿esta seguro que desea eliminar este usuario?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
                     </form>
                    </td>
                     <td>{{ $user->name}}</td>
                     <td>{{ $user->last_name}}</td>
                     <td>{{ $user->username}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{ $user->addres}}</td>
                     <td>{{ $user->type}}</td>
                 </tr>
                     
                 @endforeach
             </tbody>
            </table>
        </div>
    </div>
     
    </div>
    <div class="text-center" > {{ $users->links() }}</div>
</div>



@endsection