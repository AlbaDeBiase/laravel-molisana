@extends('layouts.app')

@section('content')

<div class="wrap">

    <div class="container">
        <div class="descrizione-prodotti">
            @foreach ($formati as $formato)
                <div class="card">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <div class="hover-effect">
                        <a href="#">{{$formato['titolo']}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('title-page', 'Prodotti-La Molisana')
