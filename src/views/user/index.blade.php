@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
  <p>Hay {{ count($users) }} usuarios</p>
  @if( count($users) )
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->getId() }}</td>
        <td>{{ $user->getName() }}</td>
        <td>{{ $user->getSurName() }}</td>
        <td>
          <a href="/user/{{ $user->getId() }}"><button>Mostrar</button></a>
          <a href="/user/{{ $user->getId() }}/edit"><button>Editar</button></a>
          <form action="/user/{{ $user->getId() }}" method="post" class="inline">
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="eliminiar">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <h2>No hay usuarios</h2>
  @endif
@endsection