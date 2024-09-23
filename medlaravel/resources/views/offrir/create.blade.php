<x-app-layout>
<div class="container flex justify-center mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <x-slot name="header">
                    <div class="card-header">Ajouter un Médicament</div>
                    </x-slot>
                    <x-tasks-card>
                    @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('offrir.store') }}" method="POST">
    @csrf

    <div>
        <h1> Rapport : {{ $rapport->id }} </h1>
        <input type="hidden" name="rapport_id" value="{{ $rapport->id }}">
    </div>
   
    <div>
        <label for="medicament_id">Médicament :</label>
        <select name="medicament_id" id="medicament_id">
            @foreach ($medicaments as $medicament)
                <option value="{{ $medicament->id }}">{{ $medicament->nomCommercial }}</option>
            @endforeach
        </select>
    </div>
    <div>
    <label for="quantite">Quantité :</label>
    <input type="number" name="quantite" id="quantite" value="1">
</div>


    <button type="submit">Ajouter</button>
</form>
</x-tasks-card>

</div>
            </div>
        </div>
    </div>
</x-app-layout>