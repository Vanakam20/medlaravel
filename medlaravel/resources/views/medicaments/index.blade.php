<!-- resources/views/medecins.blade.php -->
<x-app-layout>
    <div class="container flex justify-center mx-auto">
    <x-slot name="header">
        <h1>Liste des médicaments</h1>
</x-slot>
        <x-tasks-card>
        @if ($medicaments->isEmpty())
            <p>Aucun médecin trouvé.</p>
        @else
            <ul>
            @foreach ($medicaments as $medicament)
                <option value="{{ $medicament->id }}">{{ $medicament->nomCommercial }}</option>
            @endforeach
            </ul>
        @endif
</x-tasks-card>
    </div>
</x-app-layout>