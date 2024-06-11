<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\EnderecoRequest;
use Redirect;

class EnderecoController extends Controller
{

    public function index() // TESTAR
    {
        $user = Auth::user();
        $enderecos = Endereco::where('user_id', $user->id)->get();

        return view('pages.enderecos.list', ['enderecos' => $enderecos]);
    }

    public function create()
    {
        return view('pages.enderecos.create');
    }

    public function store(EnderecoRequest $request)
    {
        $endereco = Endereco::create(
            $request->validated()
        );

        return redirect()->back();
    }

    public function show(Endereco $endereco) // TESTAR
    {
        return dd($endereco);
        /* return view('pages.enderecos.show'); //INCOMPLETO */
    }

    public function edit(Endereco $endereco)
    {
        //
    }

    public function update(Request $request, Endereco $endereco)
    {
        //
    }

    public function destroy(Endereco $endereco)
    {
        //
    }
}
