@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{ url('felhasznalo_hozzaadas') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új felhasználó hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Felhasználók</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table_felh">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Magánszemély</th>
                        <th>Cégnév</th>
                        <th>Vezetéknév</th>
                        <th>Keresztnév</th>
                        <th>Irányítószám</th>
                        <th>Város</th>
                        <th>Cím</th>
                        <th>Telefonszám</th>
                        <th>Adószám</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($felhasznalok as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->maganszemely }}</td>
                            <td>{{ $item->cegnev }}</td>
                            <td>{{ $item->vezeteknev }}</td>
                            <td>{{ $item->keresztnev }}</td>
                            <td>{{ $item->iranyitoszam }}</td>
                            <td>{{ $item->varos }}</td>
                            <td>{{ $item->cim }}</td>
                            <td>{{ $item->telefon }}</td>
                            <td>{{ $item->adoszam }}</td>
                            <td>
                                <a href="{{ url('felhasznalo_szerkeszt/'.$item->id)}} "><button class="btn btn-prim btn-sm">Szerkesztés</button></a>
                                <a href="{{ url('felhasznalo_torol/'.$item->id)}} "><button class="btn btn-dangerer btn-sm">Törlés</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
