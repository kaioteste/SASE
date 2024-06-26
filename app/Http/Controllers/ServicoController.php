<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServicoController extends Controller
{
    public readonly Servico $servico;

    public function __construct() {
        $this->servico = new Servico();
    }

    // INDEX
    public function index()
    {
        $servicos = $this->servico->all();

        return view('pages/servicos/list_servico', ['servico' => $servicos]);
    }

    // CREATE
    public function create()
    {
        return view('pages/servicos/create_servico');
    }

    // STORE
    public function store(Request $request)
    {

        $created= $this->servico->create([
            'nome'=>$request->input('nome'),
            'tempo'=>$request->input('tempo'),
            'preco'=>$request->input('preco'),
            'user_id'=>Auth::user()->id,

        ]);

        if($created){
            return redirect()->route('servicos.index')->with('message', 'Serviço adicionado');
        };

        return redirect()->route('servicos.index')->with('message', 'erro');

    }

    // SHOW
    public function show(Servico $servico)
    {
        return view('pages/servicos/show_servico', ['servico'=>$servico]);
    }

    // EDIT
    public function edit(Servico $servico)
    {
        return view('pages/servicos/edit_servico',['servico' =>$servico]);
    }

    // UPDATE
    public function update(Request $request, Servico $servico)
    {
        {
            $id = $servico->id;
            $update = $this->servico->where('id', $id)->update($request->except(['_token', '_method']));
            if($update){

                return redirect()->route('servicos.index')->with('message', 'Update feito');
                // $servicos = $this->servico->all();
                // return view('pages/servicos/servico', ['servico' => $servicos])->with('message', 'Update feito');

            }

        }
    }

    // DELETE
    public function destroy(Servico $servico)
    {
        $id = $servico->id;
        $this->servico->where('id', $id)->delete();
        return redirect()->route('servicos.index')->with('message', 'serviço deletado');
    }
}

