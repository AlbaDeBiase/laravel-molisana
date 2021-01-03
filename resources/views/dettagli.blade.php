@extends('layouts.app')

@section('content')

<div class="wrapper-dettagli">
    <div class="container">
        <div class="dettaglio-prodotto">
            <h1>{{$formato['titolo']}}</h1>
            <img src="{{$formato['src-h']}}" alt="">
            <img src="{{$formato['src-p']}}" alt="">
        </div>
    </div>
    <div class="descrizione">
        <div class="container">
            <p>{!!$formato['descrizione']!!}</p>
        </div>
    </div>
</div>
<

@endsection


@section('title-page', 'Dettagli-La Molisana')
