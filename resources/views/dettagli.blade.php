@extends('layouts.app')

@section('content')

<div class="wrapper-dettagli">
    <div class="container">
        <div class="dettaglio-prodotto">
            <h1>{{$formato['titolo']}}</h1>
                <img src="{{$formato['src-h']}}" alt="{{$formato['titolo']}}">
                    <img src="{{$formato['src-p']}}" alt="{{$formato['titolo']}}">
                    <a onMouseEnter="show('foto_prev','freccia_destra')" onMouseLeave="hide('foto_prev','freccia_destra')" href=" {{ route('dettagli', ['id' => $commands['prev']]) }} ">
                        <div id="freccia_destra">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                        <div id="foto_prev">
                                <img src="{{ $prodotti[$commands['prev']]['src']}}" alt="{{$formato['titolo']}}">
                            <div id="titolo_prev">
                                <p>{{$prodotti[$commands['prev']]['titolo']}}</p>
                            </div>
                        </div>
                    </a>
                <a onMouseEnter="show('foto_next','freccia_sinistra')" onMouseLeave="hide('foto_next','freccia_sinistra')"href=" {{ route('dettagli', ['id' => $commands['next']]) }} ">
                    <div id="freccia_sinistra">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    <div id="foto_next">
                            <img src="{{$prodotti[$commands['next']]['src']}}" alt="{{$formato['titolo']}}">
                        <div id="titolo_next" >
                            <p >{{$prodotti[$commands['next']]['titolo']}}</p>
                        </div>
                    </div>
                </a>
        </div>
        <table class="dettaglio-griglia">
            <tr>
                <th class="border-none">
                    <img src="{{'../images/logo-la-molisana.png'}}" alt="{{$formato['titolo']}}">
                </th>
                <th class="uppercase text-size"> grano decorticato a pietra trafilatura al bronzo</th>
                <th>
                    <img src="{{'../images/acqua-molise.png'}}" alt="">
                </th>
            </tr>
            <tr>
                <th class="uppercase text-size border-none">{{$formato['titolo']}}</th>
                <th class="uppercase text-size"> <i class="far fa-clock"></i> tempi di cottura:{{$formato['cottura']}} </th>
                <th class="text-size">{{$formato['peso']}}</th>
            </tr>
        </table>
    </div>
    <div class="descrizione">
        <div class="container">
            <p>{!!$formato['descrizione']!!}</p>
        </div>
            <img class"posate" src="{{'../images/posate.jpg'}}" alt="">
    </div>
</div>

<script type="text/javascript">

    function show(foto_prev,freccia_destra) {
    document.getElementById(foto_prev).style.visibility = "visible";
    document.getElementById(freccia_destra).style.visibility = "hidden";
    }

    function hide(freccia_destra,foto_prev) {
    document.getElementById(freccia_destra).style.visibility = "hidden";
    document.getElementById(foto_prev).style.visibility = "visible";
    }

    function show(foto_next,freccia_sinistra) {
    document.getElementById(foto_next).style.visibility = "visible";
    document.getElementById(freccia_sinistra).style.visibility = "hidden";
    }
    function hide(freccia_sinistra,foto_next) {
    document.getElementById(freccia_sinistra).style.visibility = "hidden";
    document.getElementById(foto_next).style.visibility = "visible";
    }
    // function show(titolo_prev) {
    // document.getElementById(titolo_prev).style.visibility = "visible";
    // }



</script>


@endsection


@section('title-page', 'Dettagli-La Molisana')
