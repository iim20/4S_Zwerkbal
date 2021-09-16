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
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van Joanne Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball.</p>
    <div class="dashboard">
        <div class="resultaat">
            <div class="resultaat_1">
                <p>Aantal aankomende <br>toernooien: <h1>5</h1></p>
            </div>    
            <div class="resultaat_2">
                <p>Totaal aantal teams: <h1>26</h1></p>
            </div>
        </div>    
        
        <div class="toernooien_img">
            <img src="/img/snitch.png" alt="hero foto">
        </div>
    </div>
@endsection