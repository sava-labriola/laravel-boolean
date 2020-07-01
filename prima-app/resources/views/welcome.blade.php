@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container clearfix">
        <div class="jumbo-left">
            <h1>Diventa sviluppatore web</h1>
            <p>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
            <ul>
                <li>6 mesi di corso intensivo online in diretta</li>
                <li>Nessuna competenza di programmazione richiesta</li>
                <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
            </ul>
        </div>
        <div class="jumbo-right flex-center">
            <div class="img flex-center">
                <img src="{{ asset('img/pc-black-gif.gif') }}" alt="pc">
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-title', 'Homepage')
