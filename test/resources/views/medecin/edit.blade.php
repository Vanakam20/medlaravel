<!-- resources/views/medecin/edit.blade.php -->

<x-app-layout>
    <div class="container flex justify-center mx-auto">
    <x-slot name="header">
        <h1>Édition du médecin</h1>
</x-slot>
        <div class="card">
        <x-tasks-card>
            <div class="card-body">
                <form method="POST" action="{{ route('medecin.update', $medecin) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $medecin->nom }}" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $medecin->prenom }}" required>
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse:</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $medecin->adresse }}" required>
                    </div>

                    <div class="form-group">
                        <label for="ville">Ville:</label>
                        <input type="text" class="form-control" id="ville" name="ville" value="{{ $medecin->ville }}" required>
                    </div>

                    <div class="form-group">
                        <label for="cp">Code postal:</label>
                        <input type="text" class="form-control" id="cp" name="cp" value="{{ $medecin->cp }}" required>
                    </div>

                    <div class="form-group">
                        <label for="tel">Téléphone:</label>
                        <input type="text" class="form-control" id="tel" name="tel" value="{{ $medecin->tel }}" required>
                    </div>

                    <div class="form-group">
                        <label for="speComplementaire">Spécialité complémentaire:</label>
                        <input type="text" class="form-control" id="speComplementaire" name="speComplementaire" value="{{ $medecin->speComplementaire }}">
                    </div>

                    <div class="form-group">
                        <label for="departement">Département:</label>
                        <input type="text" class="form-control" id="departement" name="departement" value="{{ $medecin->departement }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
            </x-tasks-card>
        </div>
    </div>
</x-app-layout>