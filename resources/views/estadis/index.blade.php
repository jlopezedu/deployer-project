@extends('layouts.app')

@section('title', 'Guia d\'Estadis')
@section('content')
@vite(['resources/css/estadis.css'])
<h2 class="estadi">Guia d'Estadis</h2>
<table>
    <tr>
        <th>Estadi</th>
    </tr>
    @foreach($estadis as $estadi)
        <tr><td class="estadi"><?= $estadi ?></td></tr>
    @endforeach
</table>
    
 </ul>
 @endsection