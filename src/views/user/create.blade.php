@extends('layouts.app')

@section('title', "Crear usuario")

@section('content')
  <form action="/user" method="post">
    <p>
      <input type="text" name="name" placeholder="Nombre...">
    </p>
    <p>
      <input type="text" name="surname" placeholder="Apellidos...">
    </p>
    <p>
      <input type="email" name="email" placeholder="correo electrónico...">
    </p>
    <p>
      <input type="submit" value="crear">
    </p>
  </form>
@endsection