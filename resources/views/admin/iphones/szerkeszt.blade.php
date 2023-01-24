@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Mobil szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('mobil_update/'.$iphone->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" value="{{ $iphone->modell }}" class="form-control" name="modell">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Szin</label>
                        <input type="text" value="{{ $iphone->szin }}" class="form-control" name="szin">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" value="{{ $iphone->tarhely }}" class="form-control" name="tarhely">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" value="{{ $iphone->ar }}" class="form-control" name="ar">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" value="{{ $iphone->keszlet }}" class="form-control" name="keszlet">
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="form-label" for="">Rövid név</label>
                        <input type="text" value="{{ $iphone->slug }}"  class="form-control" name="slug">
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <label class="form-label" for="">Leírás</label>
                        <textarea class="form-control" rows="3" name="leiras">{{ $iphone->leiras }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Státusz</label>
                        <input type="checkbox" value="{{ $iphone->status }}"  class="form-check-control" name="status">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Népszerű termék</label>
                        <input type="checkbox" value="{{ $iphone->nepszeru }}"  class="form-check-control" name="nepszeru">
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <label class="form-label" class="fom-label" for="">Meta cím:</label>
                        <input type="text" value="{{ $iphone->meta_cim }}"  class="form-control" name="meta_cim">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Meta leírás</label>
                        <textarea class="form-control" rows="3" name="meta_leiras">{{ $iphone->meta_leiras }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Meta kulcsszó</label>
                        <textarea class="form-control" rows="3" name="meta_kulcsszo">{{ $iphone->meta_kulcsszo }}</textarea>
                    </div> --}}
                    @if($iphone->kepfajl)
                        <img src="{{ asset('img/feltoltesek/mobilok/'.$iphone->kepfajl)}}" class="kategoriakep" alt="mobilkép">
                    @endif
                    <div class="col-md-6">
                        <label class="form-file" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="kepfajl" value="{{ old('kepfajl') }}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
