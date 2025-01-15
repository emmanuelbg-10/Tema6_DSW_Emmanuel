@extends('layouts.app')

@section('title', "Editar grupo con id: " . $group->getId())

@section('content')
  <form action="/group/{{ $group->getId() }}" method="post">
    <input type="hidden" name="_method" value="put">
    <p>
      <input type="text" name="name" placeholder="Nombre..." value="{{ $group->getName() }}">
    </p>
    <p>
      <input type="submit" value="Guardar">
      <input type="reset" value="Restablecer">
    </p>
  </form>
@endsection