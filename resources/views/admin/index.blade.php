@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>iPhone Webshop</h1>
            @php
                $felhasznalokSzama = count($felhasznalok);
                $mobilokSzama = count($iphones);
                $adatok2 = DB::table('felhasznalok')->select('vezeteknev')->where('varos', 'LIKE', '%Budapest%')->get();
                $adatok3 = DB::table('iphones')->select('szin')->where('tarhely', 'LIKE', '128')->get();
                $adatok4 = DB::table('felhasznalok')->select('varos')->groupBy('varos')->count();
                $adatok5 = DB::table('felhasznalok')->select(DB::raw('count(*) as id_count, varos'))->groupBy('varos')->get();
            @endphp
            <div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <span>Felhasználók száma:</span>
                            </div>
                            <div class="card-body">
                                {{ $felhasznalokSzama }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <span>Termékek száma:</span>
                            </div>
                            <div class="card-body">
                                {{ $mobilokSzama }}
                                {{ $adatok2 }}
                                {{ $adatok3[0]->szin }}
                                <p>{{ $adatok3[1]->szin }}</p>
                                <p>{{ $adatok4 }}</p>
                                <p>{{ $adatok5 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <span>Felhasználók száma:</span>
                            </div>
                            <div class="card-body">
                                @foreach ($adatok5 as $adat)
                                    <span>{{ $adat->varos }}: </span><span>{{ $adat->id_count }}</span><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
