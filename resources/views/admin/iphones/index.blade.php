@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{ url('mobil_hozzaadas') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új mobil hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>iPhone mobilok</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Modell</th>
                        <th>Szín</th>
                        <th>Tárhely</th>
                        <th>Ár</th>
                        <th>Készlet</th>
                        <th>Kép</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($iphones as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->modell }}</td>
                            <td>{{ $item->szin }}</td>
                            <td>{{ $item->tarhely }}</td>
                            <td>{{ $item->ar }}</td>
                            <td>{{ $item->keszlet }}</td>
                            <td class="kepek"><img src="{{ asset('img/feltoltesek/mobilok/'.$item->kepfajl)}}" class="kategoriakep" alt="mobilkép"></td>
                            <td>
                                <a href="{{ url('mobil_szerkeszt/'.$item->id)}} "><button class="btn btn-prim btn-sm">Szerkesztés</button></a>
                                <a href="{{ url('mobil_torol/'.$item->id)}} "><button class="btn btn-dangerer btn-sm">Törlés</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
