<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::get();

        // dd($produtos);
 
        //  Mostrar em um frontend listando os clientes
         return view('produtos.index', [
             'produtos' => $produtos
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produtos = Produto::find($id);

        return view('produtos.show', [
            'produtos' => $produtos
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produtos = Produto::findOrFail($id);
        return view('produtos.edit', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'preco' => 'required|numeric',
        'estoque' => 'required|integer',
    ]);

    // Encontrar o produto pelo ID
    $produto = Produto::findOrFail($id);

    // Atualizar os dados do produto
    $produto->nome = $request->input('nome');
    $produto->descricao = $request->input('descricao');
    $produto->preco = $request->input('preco');
    $produto->estoque = $request->input('estoque');
    
    // Salvar as alterações no banco de dados
    $produto->save();

    // Redirecionar com uma mensagem de sucesso
    return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
