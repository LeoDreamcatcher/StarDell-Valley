@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <form action=&quot;{{ route('products.store') }}&quot; method=&quot;post&quot;>
@csrf
    <label for=&quot;name&quot;>Nome:</label>
    <input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; required>
    <br>
    <label for=&quot;description&quot;>Descrição:</label>
    <textarea name=&quot;description&quot; id=&quot;description&quot;></textarea>
    <br>
    <label for=&quot;price&quot;>Preço:</label>
    <input type=&quot;number&quot; step=&quot;0.01&quot; name=&quot;price&quot; id=&quot;price&quot; required>
    <br>

    <button type=&quot;submit&quot;>Salvar</button>
    </form>
@endsection