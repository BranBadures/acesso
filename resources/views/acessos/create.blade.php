@extends('main')

@section('content')
    <form method="POST" action="/acessos">
        @csrf
        Número USP: <input type="text" name="codpes">
        <button type="submit" class="btn btn-success"> Enviar </button>
    </form>
@endsection