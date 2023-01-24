@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új kategória hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('kategoria_store')}} " method="POST" enctype="multipart/form-data"> {{-- beszuras --}}
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">Kategória megnevezése</label>
                        <input type="text" class="form-control" name="nev" value="{{ old('nev') }}">
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="form-label" for="">Rövid név</label>
                        <input type="text" class="form-control" name="slug">
                    </div> --}}
                    <div class="col-md-6">
                        <label class="form-label" for="">Leírás</label>
                        <textarea class="form-control" rows="3" name="leiras" value="{{ old('leiras') }}"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Státusz</label>
                        <input type="checkbox" class="form-check-control" name="status" value="{{ old('status') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Népszerű termék</label>
                        <input type="checkbox" class="form-check-control" name="nepszeru" value="{{ old('nepszeru') }}">
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="form-label" class="fom-label" for="">Meta cím:</label>
                        <input type="text" class="form-control" name="meta_cim">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Meta leírás</label>
                        <textarea class="form-control" rows="3" name="meta_leiras"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Meta kulcsszó</label>
                        <textarea class="form-control" rows="3" name="meta_kulcsszo"></textarea>
                    </div> --}}
                    <div class="col-md-6">
                        <label class="form-file" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="kepfajl">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Hozzáad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
