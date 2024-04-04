@extends('layout.app')
<div>
    @section('content')
    <form action="" method='post'>

        <label for="idade">Idade</label>
        <input type="date" id='idade'>

        <label for="altura">Altura</label>
        <input type="text" id='altura'>

        <label for="peso">Peso</label>
        <input type="text" id='peso'>
    </form>
    @endsection
</div>
