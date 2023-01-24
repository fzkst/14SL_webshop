@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új mobil hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('mobil_store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" class="form-control" name="modell" value="{{ old('modell') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Szín</label>
                        <input type="text" class="form-control" name="szin" value="{{ old('szin') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" class="form-control" name="tarhely" value="{{ old('tarhely') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" class="form-control" name="ar" value="{{ old('ar') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" class="form-control" name="keszlet" value="{{ old('keszlet') }}">
                    </div>
                    {{-- <div class="col-md-6">
                        <label class="form-label" for="">Rövid név</label>
                        <input type="text" class="form-control" name="slug">
                    </div> --}}
                    {{-- <div class="col-md-6">
                        <label class="form-label" for="">Szín</label>
                        <textarea class="form-control" rows="3" name="leiras"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Státusz</label>
                        <input type="checkbox" class="form-check-control" name="status">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Népszerű termék</label>
                        <input type="checkbox" class="form-check-control" name="nepszeru">
                    </div> --}}
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
                        <button type="submit" class="btn btn-outline-secondary mt-3" id="btn_hozzaad">Hozzáad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
