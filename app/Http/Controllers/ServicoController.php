<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServicoController extends Controller
{
    public readonly Servico $servico;

    public function __construct() {
        $this->servico = new Servico();
    }

    


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = $this->servico->all();
        
            
        
       
        return view('pages/servicos/servico', ['servico' => $servicos]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/servicos/create_servico');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
       
        $created= $this->servico->create([
            'nome'=>$request->input('nome'),
            'tempo'=>$request->input('tempo'),
            'preco'=>$request->input('preco'),
            'user_id'=>Auth::user()->id,
        

            
        ]);
        if($created){
            return redirect()->back()->with('message', 'Funcionarios adicionado');
        };

        return redirect()->back()->with('message', 'erro');
    }

    /**
     * Display the specified resource.
     */
    public function show(servico $servico)
    {
        return view('pages/servicos/show_servico', ['servico'=>$servico]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servico $servico)
    {
        return view('pages/servicos/edit_servico',['servico' =>$servico]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servico $servico)
    {
        { 
            $id = $servico->id;
            $update = $this->servico->where('id', $id)->update($request->except(['_token', '_method']));
            if($update){

                return redirect()->back()->with('message', 'Update feito');
                // $servicos = $this->servico->all();
                // return view('pages/servicos/servico', ['servico' => $servicos])->with('message', 'Update feito');
            
            }
            
            
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servico $servico)
    {
        $id = $servico->id;
        $this->servico->where('id', $id)->delete();
        return redirect()->route('servicos.index');
    }
}
