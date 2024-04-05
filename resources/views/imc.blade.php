@extends('layout.app')
<div>
    @section('content')
    <form action="{{ route('imc.store') }}" method='post'>

        <label for="idade">Idade</label>
        <input type="date" id='idade' name='idade'>

        <label for="altura">Altura</label>
        <input type="text" id='altura' name='altura'>

        <label for="peso">Peso</label>
        <input type="text" id='peso' name='peso'>

        <input type="submit" value='Enviar'>
    </form>

    <p>IMC: {{$imc}}</p>
    @endsection
</div>
