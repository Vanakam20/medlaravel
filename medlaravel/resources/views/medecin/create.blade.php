<!-- resources/views/medecin/create.blade.php -->
<x-app-layout>
    <div class="container flex justify-center mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <x-slot name="header">
                    <div class="card-header">Ajouter un médecin</div>
                    </x-slot>
                    <x-tasks-card>
                    @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
                @endif
                    <div class="card-body">
                        <form action="{{ route('medecin.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="form-group">
                                <label for="prenom">Prénom:</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>

                            <div class="form-group">
                                <label for="adresse">Adresse:</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" required>
                            </div>

                            <div class="form-group">
                                <label for="ville">Ville:</label>
                                <input type="text" class="form-control" id="ville" name="ville" required>
                            </div>

                            <div class="form-group">
                                <label for="cp">Code postal:</label>
                                <input type="text" class="form-control" id="cp" name="cp" required>
                            </div>

                            <div class="form-group">
                                <label for="tel">Téléphone:</label>
                                <input type="text" class="form-control" id="tel" name="tel" required>
                            </div>

                            <div class="form-group">
                                <label for="speComplementaire">Spécialité complémentaire:</label>
                                <input type="text" class="form-control" id="speComplementaire" name="speComplementaire">
                            </div>

                            <div class="form-group">
                                <label for="departement">Département:</label>
                                <input type="text" class="form-control" id="departement" name="departement" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                    </x-tasks-card>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>