@extends('layouts.dash')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Module</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Modules</li>
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
          <h3 class="card-title">Détail d'un module</h3>

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

        <ul>
            <li>nom: {{$module->nom}}</li>

        </ul>

        <hr>
        <h5>Liste des etudiants de ce module ({{$module->etudiants->count()}})</h5>
        <h5>Moyenne d'age: ({{$module->etudiants->avg('age')}})</h5>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>module</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($module->etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->age }}</td>
                    <td>{{ $etudiant->module_id }}</td>
                    <td>
                        <a href="{{ route('etudiants.show', $etudiant) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('etudiants.edit', $etudiant) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ url('/etudiants/'.$etudiant->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

