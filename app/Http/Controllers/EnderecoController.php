<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\EnderecoRequest;
use Redirect;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // TESTAR
    {
        $user = Auth::user();
        $enderecos = Endereco::where('user_id', $user->id)->get();

        return view('pages.enderecos.list', ['enderecos' => $enderecos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.enderecos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnderecoRequest $request)
    {
        $endereco = Endereco::create(
            $request->validated()
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Endereco $endereco) // TESTAR
    {
        return dd($endereco);
        /* return view('pages.enderecos.show'); //INCOMPLETO */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Endereco $endereco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Endereco $endereco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Endereco $endereco)
    {
        //
    }
}
