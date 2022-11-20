@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Tipos')

@section('content')
<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">Lista de Tipos</h5>
    <div class="table-responsive text-nowrap">
      <a href="{{route('types-create')}}" class="btn btn-primary">Crear Tipo</a>
        <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>ACTIVO</th>
            <th>Creado en</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($types as $typo)
            <tr>
                <td>{{ $typo->id}}</td>
                <td>{{ $typo->name}}</td>
                <td>{{ $typo->active}}</td>
                <td>{{ $typo->created_at}}</td>
                <td><a href="{{route('types-edit', $typo->id) }}">Editar</a>  ! <a href="{{ route('types-destroy', $typo->id)}}"> Borrar</a></td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

@endsection