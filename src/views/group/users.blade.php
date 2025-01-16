@extends('layouts.app')

@section('title', 'Modificando los usuarios del grupo')

@section('content')
@if ($group)
  <h2>Grupo {{ $group->getName() }} con id {{ $group->getId() }}</h2>
    
    <form action="/group/{{ $group->getId() }}/users" method="post" class="inline">
    <ul>
      @foreach($users as $user)
        <li>
      @php
        $checked = (in_array($user->getId(), $usersBelongId)) ? 'checked' : '';
      @endphp 
      <input type="checkbox" 
        name="userid[]" 
        id="user_{{ $user->getId() }}" 
        value="{{ $user->getId() }}" 
        {{ $checked }}> 
      <label for="user_{{ $user->getId() }}">{{ $user->getName() }}</label>
    </li>

    @endforeach
  </ul>
      </form>      
@else
  <h2>Grupo no encontrado</h2>
@endif
@endsection