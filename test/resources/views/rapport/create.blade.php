<!-- resources/views/rapport/create.blade.php -->
<x-app-layout>
<title>Créer un rapport</title>
<x-slot name="header">
    <h1>Créer un rapport</h1>
</x-slot>
<x-tasks-card>
@if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
                @endif
    <form action="{{ route('rapport.store') }}" method="post">
        @csrf
        <label for="visiteur">Visiteur:</label>
        <select name="visiteur_id" id="visiteur">
            @foreach ($visiteurs as $visiteur)
                <option value="{{ $visiteur->id }}">{{ $visiteur->name }}</option>
            @endforeach
        </select><br>
        
        <label for="medecin">Médecin:</label>
        <select name="medecin_id" id="medecin">
            @foreach ($medecins as $medecin)
                <option value="{{ $medecin->id }}">{{ $medecin->nom }}</option>
            @endforeach
        </select><br>
        
        <label for="motif">Motif:</label>
        <input type="text" name="motif" id="motif"><br>
        
        <label for="bilan">Bilan:</label><br>
        <textarea name="bilan" id="bilan"></textarea><br>
        
        <button type="submit">Créer</button>
    </form>
</x-tasks-card>
</x-app-layout>
