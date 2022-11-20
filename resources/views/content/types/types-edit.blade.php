@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Editar tipo')

@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Editar tipo</h5>
      </div>
      <div class="card-body">
        <form action="{{route('types-update')}}" method="POST">
            @csrf
            <input type="hidden" name="type_id" value="{{ $type->id }}" />
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nombre</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" name="name" value="{{ $type->name }}"class="form-control" id="basic-icon-default-fullname" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Descripcion</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" name="description" value="{{ $type->description }}" id="basic-icon-default-email" class="form-control" aria-label="usuario.nombre" />
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



@endsection