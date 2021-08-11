<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        // ('pasta.arquivoblade')
        return view('cliente.clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // 'nameDoInput.regra' => 'mensagem específica'
         $mensagens = [
            'nome.required' => 'O nome é requerido/obrigatório',
            'nome.min' => 'O nome deve conter no mínimo 3 caracteres',
            'email.email' => 'O e-mail informado é inválido.',
            //Agora criando uma mensagem genérica para todos os campos requeridos:
            'required' => 'O campo :attribute não pode estar em branco.'
        ];  

        // o atributo aqui é o name do form, não o id.
        $request->validate([
            'nome' => 'required|min:3',
            'idade' => 'max:3|required',
            'email' => 'unique:clientes|required|email',
        ], $mensagens);

         

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->email = $request->input('email');
        $cliente->endereco = $request->input('endereco');
        $cliente->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
