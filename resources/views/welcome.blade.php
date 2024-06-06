@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Portafolio personale Mattia Turini</h1>
    <p>In questo portafolio troverete tutti i progetti migliori o più interessanti che ho reallizato durante il percorso Boolean. Per il momento questa è una versione base,o se vogliamo entrare nel linguaggio del settore , un Alpha (o una pre-Alpha ). Verrà aggiornata constantemente implementando tutto quello che abbiamo visto, diventanto cosi, essa stessa un progetto da mostrare. </p>
</div>
<div class="container mt-5">
    <a class="btn btn-success" href="{{route('boolfolios.index')}}">Vai ai progetti</a>
</div>


@endsection