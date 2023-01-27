@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Kategória szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('kategoriak/'.$kategoria->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Kategória megnevezése</label>
                        <input type="text" value="{{ $kategoria->nev }}" class="form-control" name="nev">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Leírás</label>
                        <textarea class="form-control" rows="6" name="leiras">{{ $kategoria->leiras }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-check-label" for="">Státusz</label>
                        <input type="checkbox" value="{{ $kategoria->status }}"  class="form-check-control" name="status">
                    </div>
                    <div class="mb-4">
                        <label class="form-check-label" for="">Népszerű termék</label>
                        <input type="checkbox" value="{{ $kategoria->nepszeru }}"  class="form-check-control" name="nepszeru">
                    </div>
                    @if($kategoria->kepfajl)
                        <img src="{{ asset('img/feltoltesek/kategoriak/'.$kategoria->kepfajl)}}" class="kategoriakep mb-4" alt="kategóriakép">
                    @endif
                    <div class="mb-4">
                        <label class="form-file mb-2" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="kepfajl" value="{{ $kategoria->kepfajl }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
