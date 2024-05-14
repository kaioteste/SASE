<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
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
        $funcionario = $this->funcionario->all();
        
            
        
       
        return view('pages/funcionarios/funcionario', ['funcionario' => $funcionario]);
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
            'user_id'=>Auth::user()->id,
        ]);
        if($created){
            return redirect()->back()->with('message', 'serviço criado');
        };

        return redirect()->back()->with('message', 'erro');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(funcionario $funcionario)
    {
        return view('pages/funcionarios/show_funcionario', ['funcionario'=>$funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(funcionario $funcionario)
    {
        return view('pages/funcionarios/edit_funcionario',['funcionario' =>$funcionario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, funcionario $funcionario)
    {
        $id = $funcionario->id;
            $update = $this->funcionario->where('id', $id)->update($request->except(['_token', '_method']));
            if($update){

                return redirect()->back()->with('message', 'Update feito');
            }
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(funcionario $funcionario)
    {
        $id = $funcionario->id;
        $this->funcionario->where('id', $id)->delete();
        return redirect()->route('funcionarios.index');
    }
}
