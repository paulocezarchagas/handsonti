<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        //dd($request->all());
        Produto::create([
            'nome'=>$request->nome,        
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade,
        ]);
        return 'Produto criado com sucesso!';
    }

    public function show($id){
         $produto = Produto::findOrFail($id);
         return view('produtos.show', ['produto'=>$produto]);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto'=>$produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome'=>$request->nome,        
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade,
        ]);
        return 'Produto alterado com sucesso!';
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto'=>$produto]);
   }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return 'Produto excluído com sucesso!';
    }
}
