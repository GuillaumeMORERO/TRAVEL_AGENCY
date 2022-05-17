<div>
    <div class="collapse" id="collapseEtapes_{{$voyage->id}}">
        @foreach ($voyage->etapes as $etape)
            <div class="border bg-blue my-2 rounded px-2 d-flex justify-content-between">
                <div>
                    <p class="mb-0 mt-2"> 
                        <span class="font_size10">Départ : </span> <span class="px-1 border bg-secondary rounded text-white">{{$etape->departure}}</span>  
                        <i class="mx-2 fa-2xs fa-solid fa-arrow-right"></i>
                        <span class="font_size10">Arrivée : </span> <span class="px-1 border bg-secondary rounded text-white">{{$etape->arrival}}</span>
                    </p>
                    <p class="mb-0">
                        <span class="font_size10">Type : </span> {{$etape->type}}
                        <span class="font_size10"> - n°</span> {{$etape->transport_number}}
                        @if (!is_null($etape->gate))
                            <span class="font_size10"> - porte n°</span> {{$etape->gate}}
                        @endif
                        @if (!is_null($etape->seat))
                            <span class="font_size10"> - place n°</span> {{$etape->seat}}
                        @endif
                        @if (!is_null($etape->baggage_drop))
                            <span class="font_size10"> - bagage</span> {{$etape->baggage_drop}}
                        @endif
                    </p>
                </div>
                <div class="p-2">
                    <form action="{{route('deleteEtape')}}" method="post">
                        @csrf
                        <input type="hidden" name="etapeId" value="{{$etape->id}}">
                        <button type="submit" class="btn btn-danger py-1">
                            <i class="fa-solid fa-trash-can fa-xs"></i>
                        </button>
                    </form>
                </div>
            </div>
            @if (!$loop->last)
                <i class="fa-solid fa-arrow-down"></i>
            @endif
        @endforeach
        <div class="mt-3 d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapseAddEtape_{{$voyage->id}}" aria-expanded="false" aria-controls="collapseAddEtape_{{$voyage->id}}">Ajouter une étape</button>
        </div>
        <div class="collapse" id="collapseAddEtape_{{$voyage->id}}">
            @include('includes.addEtape')
        </div>
    </div>
</div>