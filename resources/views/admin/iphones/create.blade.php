@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új mobil hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('/iphones')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">Modell</label>
                        <input type="text" class="form-control" name="modell" value="{{ old('modell') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Szín</label>
                        <input type="text" class="form-control" name="szin" value="{{ old('szin') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Tárhely</label>
                        <input type="text" class="form-control" name="tarhely" value="{{ old('tarhely') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Ár</label>
                        <input type="text" class="form-control" name="ar" value="{{ old('ar') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Készlet</label>
                        <input type="text" class="form-control" name="keszlet" value="{{ old('keszlet') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-file" for="">Kép feltöltése:</label>
                        <input type="file" class="form-control" name="kepfajl">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-3" id="btn_hozzaad">Hozzáad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
