@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Új felhasználó hozzáadása</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('felhasznalok')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="mb-4">
                        <label class="form-label" for="">User Id</label>
                        <input type="text" class="form-control" name="user_id" value="{{ old('user_id') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-check-label" for="">Magánszemély</label>
                        <input type="checkbox" class="form-check-control ms-2" name="maganszemely" value="{{ old('maganszemely') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cégnév</label>
                        <input type="text" class="form-control" name="cegnev" value="{{ old('cegnev') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Vezetéknév</label>
                        <input type="text" class="form-control" name="vezeteknev" value="{{ old('vezeteknev') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Keresztnév</label>
                        <input type="text" class="form-control" name="keresztnev" value="{{ old('keresztnev') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Irányítószám</label>
                        <input type="number" class="form-control" name="iranyitoszam" maxlength="4" value="{{ old('iranyitoszam') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Város</label>
                        <input type="text" class="form-control" name="varos" value="{{ old('varos') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Cím:</label>
                        <input type="text" class="form-control" name="cim" value="{{ old('cim') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Telefonszám</label>
                        <input type="text" class="form-control" name="telefon" value="{{ old('telefon') }}">
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="">Adószám</label>
                        <input type="text" class="form-control" name="adoszam" maxlength="13" value="{{ old('adoszam') }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-outline-secondary mt-3" id="btn_hozzaad">Hozzáad</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

