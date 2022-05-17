<div class="mt-3 pt-3 border-top">
    <form action="{{route('addEtape')}}" method="post" id="addEtape">
        @csrf
        <input type="hidden" name="voyageId" value="{{$voyage->id}}">

        <div class="row">
            <div class="col-6">
                <label for="departure" class="form-label">Départ*</label>
                <input type="text" class="form-control @error('departure') is-invalid @enderror" id="departure" name="departure">
                @error('departure')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="arrival" class="form-label">Arrivée*</label>
                <input type="text" class="form-control @error('arrival') is-invalid @enderror" id="arrival" name="arrival">
                @error('arrival')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="type" class="form-label">Type*</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                @error('type')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="transport_number" class="form-label">N° de transport*</label>
                <input type="text" class="form-control @error('transport_number') is-invalid @enderror" id="transport_number" name="transport_number">
                @error('transport_number')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="gate" class="form-label">Porte</label>
                <input type="text" class="form-control @error('gate') is-invalid @enderror" id="gate" name="gate">
                @error('gate')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="seat" class="form-label">Siège</label>
                <input type="text" class="form-control @error('seat') is-invalid @enderror" id="seat" name="seat">
                @error('seat')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-4">
                <label for="baggage_drop" class="form-label">Bagage</label>
                <input type="text" class="form-control @error('baggage_drop') is-invalid @enderror" id="baggage_drop" name="baggage_drop">
                @error('baggage_drop')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mt-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Enregistrer l'étape</button>
        </div>
    </form>
</div>