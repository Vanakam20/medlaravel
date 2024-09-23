<!-- resources/views/rapports/edit.blade.php -->

<x-app-layout>
@if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
                @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le rapport</title>

    <x-slot name="header">
    <h1>Modifier le rapport</h1>
</x-slot>
<x-tasks-card>
    <form action="{{ route('rapport.update', $rapport->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Utilisez la méthode PUT pour la mise à jour -->

        <!-- Affichez les champs du formulaire de modification -->
        <label for="motif">Motif :</label>
        <input type="text" name="motif" id="motif" value="{{ $rapport->motif }}">
        
        <label for="bilan">Bilan :</label>
        <textarea name="bilan" id="bilan">{{ $rapport->bilan }}</textarea>
        <input type="hidden" name="visiteur_id" id="visiteur_id" value="{{ $rapport->visiteur_id }}">
        <input type="hidden" name="medecin_id" id="medecin_id" value="{{ $rapport->medecin_id }}">
        <!-- Autres champs à modifier -->

        <button type="submit">Enregistrer</button>
    </form>
</x-tasks-card>
</x-app-layout>