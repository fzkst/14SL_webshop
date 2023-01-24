@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Kategória szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('kategoria_update/'.$kategoria->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">Kategória megnevezése</label>
                        <input type="text" value="{{ $kategoria->nev }}" class="form-control" name="nev">
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="form-label" for="">Rövid név</label>
                        <input type="text" value="{{ $kategoria->slug }}"  class="form-control" name="slug">
                    </div> --}}
                    <div class="col-md-6">
                        <label class="form-label" for="">Leírás</label>
                        <textarea class="form-control" rows="3" name="leiras">{{ $kategoria->leiras }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Státusz</label>
                        <input type="checkbox" value="{{ $kategoria->status }}"  class="form-check-control" name="status">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Népszerű termék</label>
                        <input type="checkbox" value="{{ $kategoria->nepszeru }}"  class="form-check-control" name="nepszeru">
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="form-label" class="fom-label" for="">Meta cím:</label>
                        <input type="text" value="{{ $kategoria->meta_cim }}"  class="form-control" name="meta_cim">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Meta leírás</label>
                        <textarea class="form-control" rows="3" name="meta_leiras">{{ $kategoria->meta_leiras }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Meta kulcsszó</label>
                        <textarea class="form-control" rows="3" name="meta_kulcsszo">{{ $kategoria->meta_kulcsszo }}</textarea>
                    </div> --}}
                    @if($kategoria->kepfajl)
                        <img src="{{ asset('img/feltoltesek/kategoriak/'.$kategoria->kepfajl)}}" class="kategoriakep" alt="kategóriakép">
                    @endif
                    <div class="col-md-6">
                        <label class="form-file" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="kepfajl" value="{{ $kategoria->kepfajl }}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
