<!-- resources/views/medecins/show.blade.php -->

<x-app-layout>
    <div class="container flex justify-center mx-auto">
    <x-slot name="header">
        <h1>Détails du médecin</h1>
</x-slot>
        <div class="card">
        <x-tasks-card>
            <div class="card-body">
                <h5 class="card-title">{{ $medecin->prenom }} {{ $medecin->nom }}</h5>
                <p class="card-text"><strong>Adresse:</strong> {{ $medecin->adresse }}</p>
                <p class="card-text"><strong>Ville:</strong> {{ $medecin->ville }}</p>
                <p class="card-text"><strong>Code postal:</strong> {{ $medecin->cp }}</p>
                <p class="card-text"><strong>Téléphone:</strong> {{ $medecin->tel }}</p>
                <p class="card-text"><strong>Spécialité complémentaire:</strong> {{ $medecin->speComplementaire }}</p>
                <p class="card-text"><strong>Département:</strong> {{ $medecin->departement }}</p>
                <x-link-button href="{{ route('medecin.edit', $medecin->id) }}">
                            @lang('edit')
                        </x-link-button>
            </div>
    </x-tasks-card>
        </div>
        
    </div>
</x-app-layout>