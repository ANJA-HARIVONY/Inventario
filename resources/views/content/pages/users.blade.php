@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Usuarios')

@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Lista de Usuarios</h5>
    <div class="table-responsive text-nowrap">
      <a href="{{route('pages-users-create')}}" class="btn btn-primary">Crear usuario</a>
        <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>Email</th>
            <th>Creado en</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->created_at}}</td>
                <td><a href="{{route('pages-users-edit', $user->id) }}">Editar</a>  ! <a href="{{ route('pages-users-destroy', $user->id)}}"> Borrar</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection