@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van Joanne Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball. </p>

    <div class="grid-container">
        <div class="grid-item">
            <p class="grid-title">Aantal aankomende toernooien:</p>
            <p class="grid-text">5</p>
        </div>
        <div class="grid-item-big">
            <img class="imageZwerkbal" src="img/snitch.png" alt="Afbeelding Zwerkbal Logo">
        </div>
        <div class="grid-item">
            <p class="grid-title">Totaal aantal teams:</p>
            <p class="grid-text">26</p>
        </div>
    </div>

@endsection