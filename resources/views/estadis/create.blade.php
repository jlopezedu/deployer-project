@extends('layouts.app')

@section('title', 'Guia d\'Estadis')
@section('content')
@vite(['resources/css/estadis.css'])
<h2 class="estadi">Nou estadi</h2>
<form action="" method="POST">
    <label for="estadi">Nom de l'estadi:</label>
    <input type="text" id="estadi" name="estadi"><br />
    <label for="ciutat">Ciutat:</label>
    <input type="text" id="ciutat" name="ciutat"><br />
    <label for="capacitat">Capacitat:</label>
    <input type="number" id="capacitat" name="capacitat"><br />
    <button type="submit">Afegir</button>
</form>
 @endsection