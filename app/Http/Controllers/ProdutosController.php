<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function show($id)
    {
        $produto = Produto::find($id);

        return view('produtos.show', ['produto' => $produto]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'referencia' => 'required|unique:produtos|min:3',
            'titulo' => 'required|min:3'
        ]);

        $produto = new Produto();



        $produto->referencia = $request->input('referencia');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if ($produto->save()) {
            /*Carrega e valida as imagens*/
            if ($request->hasFile('fotoproduto')) {
                $imagem = $request->file('fotoproduto');
                $nomearquivo = md5($produto->id) . "." . $imagem->getClientOriginalExtension();
                $request->file('fotoproduto')->move(public_path('./img/produtos/'), $nomearquivo);
            }

            return redirect('produtos')->with('sucesso', 'Produto salvo com sucesso.');
        }

        return redirect()->back()->with('erro', 'O produto não pode ser salvo.');
    }

    public function edit($id)
    {
        $produto = Produto::find($id);

        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update($id, Request $request)
    {
        /*Procura o produto informado*/
        $produto = Produto::find($id);

        /*Faz a validação dos campos*/
        $this->validate($request, [
            'referencia' => 'required|min:3',
            'titulo' => 'required|min:3'
        ]);

        /*Carrega e valida as imagens*/
        if ($request->hasFile('fotoproduto')) {
            $imagem = $request->file('fotoproduto');
            $nomearquivo = md5($id) . "." . $imagem->getClientOriginalExtension();
            $request->file('fotoproduto')->move(public_path('./img/produtos/'), $nomearquivo);
        }

        $produto->referencia = $request->input('referencia');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->save();

        return redirect()->back()->with('sucesso', 'Produto alterado com sucesso.');;
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        /*Verifica se há imagens e deleta*/
        if (file_exists("./img/produtos/" . md5($produto->id) . ".webp")) {
            Storage::disk('public/img/produtos')->delete(md5($produto->id));
        }
        $produto->delete();

        return redirect()->back()->with('sucesso', 'Produto excluído com sucesso.');
    }
}
