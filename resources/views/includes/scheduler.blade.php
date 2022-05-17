<div class="p-3 border rounded mb-3 bg-blue">
    <p class="font_size22 text-white">Programmer un voyage</p>

    <form action="{{route('postVoyage')}}" method="post" id="scheduler">
        @csrf
        <div class="row">
            <div class="col">
                <label for="departure_date" class="form-label text-white">Date de départ*</label>
                <input type="date" class="form-control @error('departure_date') is-invalid @enderror" id="departure_date" name="departure_date">
                @error('departure_date')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="arrival_date" class="form-label text-white">Date d'arrivée*</label>
                <input type="date" class="form-control @error('arrival_date') is-invalid @enderror" id="arrival_date" name="arrival_date">
                @error('arrival_date')
                    <div class="font_size12 text-danger p-1 alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>

</div>