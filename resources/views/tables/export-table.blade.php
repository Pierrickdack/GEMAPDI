@extends('base')
@section('title', 'GEMAPDI - Materiels')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Table des matériels</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Date d'acquisition</th>
                                                <th>Quantité</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($materiels as $materiel)
                                            <tr>
                                                <td>{{ $materiel->code_mat }}</td>
                                                <td>{{ $materiel->nom_mat }}</td>
                                                <td>{{ $materiel->description }}</td>
                                                <td>{{ $materiel->date_acq }}</td>
                                                <td>{{ $materiel->quantite }}</td>
                                                <td>
                                                    <!-- Bouton pour ouvrir le modal d'emprunt -->
                                                    <button class="btn btn-info btn-sm" title="Emprunter" data-bs-toggle="modal" data-bs-target="#empruntModal" data-id="{{ $materiel->id }}" data-nom="{{ $materiel->nom_mat }}">
                                                        <i class="fas fa-plus"></i> Emprunter
                                                    </button>

                                                    <!-- Bouton pour modifier -->
                                                    <a href="" class="btn btn-primary btn-sm" title="Modifier">
                                                        <i class="fas fa-edit"></i>
                                                        Modifier
                                                    </a>

                                                    <!-- Formulaire pour supprimer -->
                                                    <form action="{{ route('materiels.destroy', $materiel->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Supprimer"><i class="fas fa-trash-alt"></i> Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            @empty
                                            <tr>
                                                <td colspan="6">Aucun matériel trouvé.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
