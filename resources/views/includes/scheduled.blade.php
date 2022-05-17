<div class="p-3 border rounded mb-3 bg-blue">
    <p class="font_size22 text-white">Voyages programmés</p>
    @foreach ($voyages as $key => $voyage)
        <div class="bg-light rounded p-3 mb-3">
            <h4 class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse" data-bs-target="#collapseEtapes_{{$voyage->id}}" aria-expanded="false" aria-controls="collapseEtapes_{{$voyage->id}}">
                <span>Voyage {{$key+1}}</span>
                <span class="font_size10">
                    {{$voyage->etapes->isEmpty() ? 'Aucune étape !' : 'Voir les étapes'}}
                </span>
            </h4>

            <div class="my-3 d-flex justify-content-end">
                <a href="{{route('delVoyage', $voyage->id)}}">
                    <button type="button" class="btn btn-danger">Supprimer ce voyage</button>
                </a>
            </div>

            <p class="mb-0"> 
                <span class="font_size10">Départ : </span> {{$voyage->serializeDate($voyage->departure_date)}} / 
                <span class="font_size10">Arrivée : </span> {{$voyage->serializeDate($voyage->arrival_date)}}
            </p>
            @if ($voyage->etapes->isEmpty())
                @include('includes.addEtape')
            @else
                @include('includes.listeEtape')
            @endif

        </div>
    @endforeach
</div>