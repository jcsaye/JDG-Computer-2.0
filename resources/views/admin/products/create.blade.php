@extends('admin.template')


@section('content')
{{-- 
    <form class="" action="/agregarproducto" method="post" enctype="multipart/form-data">
      {{-- <ul class="errores" style="color:red" >
        @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
        @endforeach --}}

      </ul>
      {{csrf_field()}}
      <label for="">nombre:</label>
      <input  type="text" name="nombre" value="{{old('nombre')}}" ><br><br>
      {!!$errors->first('nombre','  <small>:message</small><br>')!!}

      <label for="">descripcion:</label><br>
      <textarea name="descripcion" value="{{old('descripcion')}}" rows="8" cols="70"  ></textarea><br><br>
      {!!$errors->first('descripcion','<small>:message</small><br>')!!}

      {{-- <label for="">categoria:</label>
      <select name="categoria" id="categoria" value="">
      <option value="">computadoras</option>
        <option value="">auriculares </option>
        <option value="">consolas</option>
        <option value="">otros</option>
        <option value="">monitores</option>
        <option value="">celulares</option>
        <option value="">musica</option>
        <option value="">relojes</option>
        <option value="">tv smarts</option>
        <option value="">impresoras</option>
      </select> --}}
      
      <input type="text" name="categoria" value="{{old('categoria')}}" ><br><br>
      {!!$errors->first('categoria','<small>:message</small><br>')!!}

      <label for="">precio:</label>
      <input type="text" name="precio" value="{{old('precio')}}"><br><br>
      {!!$errors->first('precio','<small>:message</small><br>')!!}

      <label for=""></label>
      <input  type="file" name="imagen" value="{{old('imagen')}}"><br><br>
      {!!$errors->first('nombre','<small>:message</small><br>')!!}

      <input class="btn-primary" type="submit" name="" value="enviar">
    </form> --}}
@endsection
  
