@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="cardheader mt-2">
            <h5>Felhasználó szerkesztése</h5>
            <hr>
        </div>
        <div class="card-body" id="kategoria_urlap">
            <form action="{{ url('felhasznalo_update/'.$felhasznalo->id)}} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">User Id</label>
                        <input type="text" value="{{ $felhasznalo->user_id }}" class="form-control" name="user_id">
                    </div>
                    <div class="col-md-6">
                        <label class="form-check-label" for="">Magánszemély</label>
                        <input type="checkbox" value="{{ $felhasznalo->maganszemely }}"  class="form-check-control" name="maganszemely">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Cégnév</label>
                        <input type="text" value="{{ $felhasznalo->cegnev }}" class="form-control" name="cegnev">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Vezetéknév</label>
                        <input type="text" value="{{ $felhasznalo->vezeteknev }}" class="form-control" name="vezeteknev">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Keresztnév</label>
                        <input type="text" value="{{ $felhasznalo->keresztnev }}" class="form-control" name="keresztnev">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Irányítószám</label>
                        <input type="text" value="{{ $felhasznalo->iranyitoszam }}" class="form-control" name="iranyitoszam">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Város</label>
                        <input type="text" value="{{ $felhasznalo->varos }}" class="form-control" name="varos">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Cím</label>
                        <input type="text" value="{{ $felhasznalo->cim }}" class="form-control" name="cim">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Telefonszám</label>
                        <input type="text" value="{{ $felhasznalo->telefon }}" class="form-control" name="telefon">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="">Adószám</label>
                        <input type="text" value="{{ $felhasznalo->adoszam }}" class="form-control" name="adoszam">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-secondary mt-2" id="btn_hozzaad">Módosít</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

