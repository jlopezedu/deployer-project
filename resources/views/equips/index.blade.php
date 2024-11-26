@extends('layouts.app')

@section('title', 'Guia d\'Equips')
@section('content')
<h1>Guia d'Equips</h1>
<ul>
    @foreach($equips as $equip)
    <br /><br />
    <x-equip
        :nom="$equip['nom']"
        :estadi="$equip['estadi']"
        :titols="$equip['titols']"
    />
    @endforeach
 </ul>
 @endsection