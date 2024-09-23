<x-app-layout>
<x-slot name="header">
        <h1>Détails du rapport</h1>
</x-slot>
        <div class="card">
        <x-tasks-card>
            <!-- Affichage des détails du rapport -->
<h2>Rapport ID: {{ $rapport->id }}</h2>
<p>Motif: {{ $rapport->motif }}</p>
<p>Bilan: {{ $rapport->bilan }}</p>

<!-- Affichage des médicaments associés -->
<h3>Médicaments associés :</h3>
<ul>
    @foreach ($rapport->offrir as $offrir)
        <li>{{ $offrir->medicament->nomCommercial }} (Quantité : {{ $offrir->quantite }})</li>
    @endforeach
</ul>

</x-tasks-card>
</div>
</x-app-layout>