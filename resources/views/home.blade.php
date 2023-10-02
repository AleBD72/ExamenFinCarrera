@extends('layouts.app')

@section('content')


<div class="row align-items-center justify-content-center">
  <div class="col-sm-3">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1524578271613-d550eacf6090?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Image materias">
      <div class="card-body">
        <h5 class="card-title">Materias</h5>
        <p class="card-text">Registre, edite o elimine la información sobre las materias.</p>
        <a href="/subjects" class="btn btn-primary">Continuar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Image estudiantes">
      <div class="card-body">
        <h5 class="card-title">Estudiantes</h5>
        <p class="card-text">Registre, edite o elimine la información sobre los estudiantes.</p>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">Continuar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <img src="https://plus.unsplash.com/premium_photo-1680807869780-e0876a6f3cd5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" class="card-img-top" alt="Image matrículas">
      <div class="card-body">
        <h5 class="card-title">Matrículas</h5>
        <p class="card-text">Registre, edite o elimine la información sobre las matriculas.</p>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Continuar</a>
      </div>
    </div>
  </div>
</div>


@endsection
