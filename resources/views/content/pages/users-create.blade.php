@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear nuevo usuario')

@section('content')
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Crear nuevo usuario</h5>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif
      <div class="card-body">
        <form action="{{ route('pages-users-store') }}" method="POST">
            @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nombre</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" name="name"class="form-control" id="basic-icon-default-fullname" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-icon-default-fullname2"/>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" name="email" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="usuario.nombre" aria-describedby="basic-icon-default-email2"/>
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Contraseña</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-question-mark"></i></span>
                <input type="password" name="password" class="form-control" id="basic-icon-default-fullname" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-icon-default-fullname2"/>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Crear</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



@endsection