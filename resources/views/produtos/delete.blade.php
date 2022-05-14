@extends('layouts.basico')
@section('conteudo')
<form action="{{ route('excluir_produto', ['id'=>$produto->id]) }}" method="POST">    
    @csrf
    <label for="">Tem certeza que deseja excluir este produto?</label><br>
    <input type="text" name="nome" value="{{ $produto->nome }}"><br>                
    <button>Sim</button>
</form>    
@endsection