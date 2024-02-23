<!-- Modal pour le matériel -->
<div class="modal fade" id="matModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau matériel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('materiel.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="code_mat">Code</label>
                            <input id="code_mat" type="text" class="form-control" name="code_mat" autofocus>
                        </div>
                        <div class="form-group col-6">
                            <label for="nom_mat">Nom</label>
                            <input id="nom_mat" type="text" class="form-control" name="nom_mat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="date_acq">Date d'acquisition</label>
                            <input id="date_acq" type="date" class="form-control" name="date_acq">
                        </div>
                        <div class="form-group col-6">
                            <label for="quantite">Quantité</label>
                            <input id="quantite" type="number" class="form-control" name="quantite">
                        </div>
                    </div>
                    {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
                        <div class="col-sm-12 col-md-7">
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choisir une image</label>
                                <input type="file" name="image" id="image-upload" />
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal d'emprunt -->
<div class="modal fade" id="empruntModal" tabindex="-1" aria-labelledby="empruntModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="empruntModalLabel">Emprunter ce matériel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('materiels.emprunt') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Champ pour le nom de l'emprunteur -->
                    <div class="mb-3">
                        <label for="emprunteur" class="form-label">Nom de l'emprunteur</label>
                        <input type="text" class="form-control" id="emprunteur" name="emprunteur" required>
                    </div>
                    <!-- Champ pour le numéro de téléphone -->
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Numéro de téléphone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone">
                    </div>
                    <!-- Champ pour la date d'emprunt -->
                    <div class="mb-3">
                        <label for="date_emprunt" class="form-label">Date d'emprunt</label>
                        <input type="date" class="form-control" id="date_emprunt" name="date_emprunt" required>
                    </div>
                    <!-- Champ pour la date de retour prévue -->
                    <div class="mb-3">
                        <label for="date_retour_prevue" class="form-label">Date de retour prévue</label>
                        <input type="date" class="form-control" id="date_retour_prevue" name="date_retour_prevue" required>
                    </div>
                    <!-- Champ pour l'heure d'emprunt -->
                    <div class="mb-3">
                        <label for="heure_emprunt" class="form-label">Heure d'emprunt</label>
                        <input type="time" class="form-control" id="heure_emprunt" name="heure_emprunt" required>
                    </div>
                    <!-- Champ pour l'heure de retour -->
                    <div class="mb-3">
                        <label for="heure_retour" class="form-label">Heure de retour</label>
                        <input type="time" class="form-control" id="heure_retour" name="heure_retour" required>
                    </div>
                    <input type="hidden" name="materiel_id" id="materiel_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Emprunter</button>
                </div>
            </form>
        </div>
    </div>
</div>


