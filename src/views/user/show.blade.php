@extends('layouts.app')

@section('title', $title)

@section('content')
@if ($user)
  <h2>Un usuario</h2>
  <p>{{ $user->getId() }}</p>
  <h3>{{ $user->getName() }} - {{ $user->getSurname() }}</h3>
  <p>{{ $user->getEmail() }}</p>
  <p> 
    <div>
      <a href="/user/{{ $user->getId() }}/edit"><button>Editar</button></a>
      <form action="/user/{{ $user->getId() }}" method="post" class="inline">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="eliminar">
      </form>      
    </div>
  </p>
  <h3>Grupo:</h3>
  <ul>
    @foreach($user->groups() as $group)
    <li>{{ $group->getName() }}</li>
    @endforeach
  </ul>
@else
  <h2>Grupo no encontrado</h2>
@endif
@endsection
