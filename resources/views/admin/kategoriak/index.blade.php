@extends('layouts.admin')

@section('content')
    <div>
        <a href="{{ url('kategoriak/create') }}"><button class="btn btn-outline-secondary mb-2" id="btn_uj_kategoria">Új kategória hozzáadása</button></a>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Kategóriák</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Név</th>
                        <th>Leírás</th>
                        <th>Kép</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategoria as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nev }}</td>
                            <td>{{ $item->leiras }}</td>
                            <td><img src="{{ asset('img/feltoltesek/kategoriak/'.$item->kepfajl)}}" class="kategoriakep" alt="kategóriakép"></td>
                            <td class="align-middle text-center">
                                <a href="{{ url('kategoriak/'.$item->id.'/edit')}} "><button class="btn btn-prim btn-sm">Szerkesztés</button></a>
                                <form action="{{ url('kategoriak/'.$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href=""><button class="btn btn-dangerer btn-sm mt-1">Törlés</button></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
