@extends('base')
@section('title', 'GEMAPDI - Emprunt')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Détails de l'emprunt</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('emprunts.create') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="materiel_id">Matériel</label>
                                <select class="form-control" name="materiel_id" required>
                                    <option value="">Sélectionnez le matériel</option>
                                    @foreach($materiels as $id => $nom)
                                        <option value="{{ $id }}">{{ $nom }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="emprunteur">Emprunteur</label>
                                <input type="text" name="emprunteur" id="emprunteur" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="text" name="telephone" id="telephone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date_emprunt">Date d'emprunt</label>
                                <input type="date" name="date_emprunt" id="date_emprunt" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date_retour_prevue">Date de retour prévue</label>
                                <input type="date" name="date_retour_prevue" id="date_retour_prevue" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="heure_emprunt">Heure d'emprunt</label>
                                <input type="time" name="heure_emprunt" id="heure_emprunt" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="heure_retour">Heure de retour</label>
                                <input type="time" name="heure_retour" id="heure_retour" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Emprunter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
