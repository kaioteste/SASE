<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FuncionarioController extends Controller
{

    public readonly Funcionario $funcionario;

    public function __construct() {
        $this->funcionario = new Funcionario();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = $this->funcionario->all();




        return view('pages/funcionarios/funcionario', ['funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/funcionarios/create_funcionario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created= $this->funcionario->create([
            'nome'=>$request->input('nome'),
            'funcao'=>$request->input('funcao'),
            'user_id'=>Auth::user()->id,
        ]);
        if($created){
            return redirect()->route('funcionarios.index')->with('message', 'serviço criado');
        };

        return redirect()->route('funcionarios.index')->with('message', 'erro');
    }


    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        return view('pages/funcionarios/show_funcionario', ['funcionario' => $funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
        return view('pages/funcionarios/edit_funcionario',['funcionario' => $funcionario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $id = $funcionario->id;
            $update = $this->funcionario->where('id', $id)->update($request->except(['_token', '_method']));
            if($update){

                return redirect()->route('funcionarios.index')->with('message', 'Update feito');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        $id = $funcionario->id;
        $this->funcionario->where('id', $id)->delete();
        return redirect()->route('funcionarios.index');
    }
}
