@extends('layouts.app')

@section('content')

<div class="wrap-prodotti">
        <div class="descrizione-prodotti">
            <div class="container">
                    @foreach ($formati as $tipo => $pasta)
                        <h1>{{$tipo}}</h1>
                            <div class="card-tipo">
                                @foreach ($pasta as $indice =>$formato)
                                    <div class="card">
                                         <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                                            <div class="hover-effect">
                                                <a href="{{route('dettagli', ['id' =>$indice])}}">{{$formato['titolo']}}</a>
                                            </div>
                                    </div>
                                @endforeach
                            </div>
                    @endforeach
            </div>
        </div>



@endsection

@section('title-page', 'Prodotti-La Molisana')
