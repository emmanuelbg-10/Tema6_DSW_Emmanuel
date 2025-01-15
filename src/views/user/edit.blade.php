@extends('layouts.app')

@section('title', "Editar usuario con id: " . $user->getId())

@section('content')
  <form action="/user/{{ $user->getId() }}" method="post">
    <input type="hidden" name="_method" value="put">
    <p>
      <input type="text" name="name" placeholder="Nombre..." value="{{ $user->getName() }}">
    </p>
    <p>
      <input type="text" name="surname" placeholder="Apellidos..." value="{{ $user->getSurname() }}">
    </p>
    <p>
      <input type="email" name="email" placeholder="correo electrónico..." value="{{ $user->getEmail() }}">
    </p>
    <p>
      <input type="submit" value="Guardar">
      <input type="reset" value="Restablecer">
    </p>
  </form>
@endsection