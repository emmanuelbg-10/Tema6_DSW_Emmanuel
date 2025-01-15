@extends('layouts.app')

@section('title', 'Grupos')

@section('content')
  <p>Hay {{ count($groups) }} grupos</p>
  @if( count($groups) )
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($groups as $group)
      <tr>
        <td>{{ $group->getId() }}</td>
        <td>{{ $group->getName() }}</td>
        <td>
          <a href="/group/{{ $group->getId() }}"><button>Mostrar</button></a>
          <a href="/group/{{ $group->getId() }}/edit"><button>Editar</button></a>
          <form action="/group/{{ $group->getId() }}" method="post" class="inline">
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="eliminiar">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <h2>No hay grupos</h2>
  @endif
@endsection