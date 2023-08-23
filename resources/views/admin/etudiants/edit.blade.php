@extends('layouts.dash')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Etudiant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Etudiants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Modification d'un étudiant</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form action="{{route('etudiants.update', $etudiant)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiant->nom }}" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $etudiant->prenom }}" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Âge</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $etudiant->age }}" required>
            </div>

            <div class="mb-3">
                <label for="filiere" class="form-label">Filiere</label>
                <select name="filiere_id" id="filiere" class="form-control">
                    @foreach ($filieres as $filiere)
                    <option value="{{$filiere->id}}"
                    {{-- {{ $filiere->id == $etudiant->filiere_id ? selected : '' }} --}}
                    @if ($filiere->id == $etudiant->filiere_id)
                    selected
                    @endif
                    >{{$filiere->nom}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier l'etudiant</button>
        </form>
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

