@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{ url('kategoria_hozzaadas') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új kategória hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Kategóriák</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Név</th>
                        <th>Leírás</th>
                        <th>Kép</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategoria as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nev }}</td>
                            <td>{{ $item->leiras }}</td>
                            <td><img src="{{ asset('img/feltoltesek/kategoriak/'.$item->kepfajl)}}" class="kategoriakep" alt="kategóriakép"></td>
                            <td>
                                <a href="{{ url('kategoria_szerkeszt/'.$item->id)}} "><button class="btn btn-prim btn-sm">Szerkesztés</button></a>
                                <a href="{{ url('kategoria_torol/'.$item->id)}} "><button class="btn btn-dangerer btn-sm">Törlés</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
