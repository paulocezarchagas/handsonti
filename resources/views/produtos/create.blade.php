@extends('layouts.basico')
@section('conteudo')
<form action="{{ route('registrar_produto') }}" method="POST">    
    @csrf
    <label for="">Nome:</label><br>
    <input type="text" name="nome"><br>
    <label for="">Custo:</label><br>
    <input type="text" name="custo"><br>
    <label for="">Preço:</label><br>
    <input type="text" name="preco"><br>
    <label for="">Quantidade:</label><br>
    <input type="text" name="quantidade"><br>
    <button>Salvar</button>
</form>    
@endsection