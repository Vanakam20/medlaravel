<!-- resources/views/medecins.blade.php -->
<x-app-layout>
    <div class="container flex justify-center mx-auto">
    <x-slot name="header">
        <h1>Liste des médecins</h1>
</x-slot>
        <x-tasks-card>
        @if ($medecin->isEmpty())
            <p>Aucun médecin trouvé.</p>
        @else
            <ul>
                @foreach ($medecin as $medecin)
                    <li>Nom : {{ $medecin->nom }} {{ $medecin->prenom }} Spécialité : {{ $medecin->speComplementaire }}</li>
                    <x-link-button href="{{ route('medecin.show', $medecin->id) }}">
                            @lang('Show')
                        </x-link-button>
                        <x-link-button href="{{ route('medecin.edit', $medecin->id) }}">
                            @lang('edit')
                        </x-link-button>
                        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $medecin->id }}').submit();">
                            @lang('Delete')
                        </x-link-button>
                        <form id="destroy{{ $medecin->id }}" method="POST" action="{{ route('medecin.destroy', $medecin) }}"  method="POST" style="display: none;">
                        @csrf
                    @method('DELETE')
                            </form>
                    @endforeach
            </ul>
        @endif
</x-tasks-card>
    </div>
</x-app-layout>