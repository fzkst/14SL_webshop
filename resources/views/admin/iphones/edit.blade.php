@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Mobil szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('iphones/'.$iphone->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" value="{{ $iphone->modell }}" class="form-control" name="modell">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Szin</label>
                        <input type="text" value="{{ $iphone->szin }}" class="form-control" name="szin">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" value="{{ $iphone->tarhely }}" class="form-control" name="tarhely">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" value="{{ $iphone->ar }}" class="form-control" name="ar">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" value="{{ $iphone->keszlet }}" class="form-control" name="keszlet">
                    </div>
                    @if($iphone->kepfajl)
                        <img src="{{ asset('img/feltoltesek/mobilok/'.$iphone->kepfajl)}}" class="kategoriakep" alt="mobilkép">
                    @endif
                    <div class="mb-4">
                        <label class="form-file mb-2" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="kepfajl" value="{{ old('kepfajl') }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
