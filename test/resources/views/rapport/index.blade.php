<!-- resources/views/medecins.blade.php -->
<x-app-layout>
    <div class="container flex justify-center mx-auto">
    <x-slot name="header">
        <h1>Liste des Rapports</h1>
</x-slot>
        <x-tasks-card>
        @if ($rapport->isEmpty())
            <p>Aucun rapport trouvé.</p>
        @else
            <ul>
                @foreach ($rapport as $rapport)
                    <p>Rapport ID: {{ $rapport->id }}</p>
                    <p>Nom du patient: {{ $rapport->patient->name }}</p>
                     <p>Nom du médecin: {{ $rapport->medecin->nom }}</p>
                    <p>Motif: {{ $rapport->motif }}</p>
                    <p>Bilan: {{ $rapport->bilan }}</p>
                    <hr>
                    <x-link-button href="{{ route('rapport.show', $rapport->id) }}">
                            @lang('Show')
                        </x-link-button>
                        <x-link-button href="{{ route('rapport.edit', $rapport->id) }}">
                            @lang('edit')
                        </x-link-button>
                        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $rapport->id }}').submit();">
                            @lang('Delete')
                        </x-link-button>
                        <x-link-button href="{{ route('offrir.create', ['rapport_id' => $rapport->id]) }}">
                            @lang('Ajouter médicament')
                        </x-link-button>
                        <form id="destroy{{ $rapport->id }}" method="POST" action="{{ route('rapport.destroy', $rapport) }}"  method="POST" style="display: none;">
                        @csrf
                    @method('DELETE')
                            </form>
                    @endforeach
            </ul>
        @endif
</x-tasks-card>
    </div>
</x-app-layout>