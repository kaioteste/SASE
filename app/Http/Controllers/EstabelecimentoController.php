<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\EstabelecimentoRequest;
use Redirect;

class EstabelecimentoController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $estabelecimentos = Estabelecimento::where('user_id', $user->id)->get();
        $enderecos = Endereco::all();

        return view('pages.estabelecimentos.list', ['estabelecimentos' => $estabelecimentos, 'enderecos' => $enderecos ]);
    }

    public function create()
    {
        $user = Auth::user();
        $enderecos = Endereco::where('user_id', $user->id)->get();

        return view('pages.estabelecimentos.create', ['enderecos' => $enderecos]);
    }

    public function store(EstabelecimentoRequest $request)
    {
        $estabelecimento = Estabelecimento::create(
            $request->validated()
        );

        return Redirect::route('estabelecimentos.index');
    }

    public function show(Estabelecimento $estabelecimento)
    {
        return view('pages.estabelecimentos.show', ['estabelecimento' => $estabelecimento]);
        /* return dd($estabelecimento->id); */
    }

    public function edit(Estabelecimento $estabelecimento)
    {
        return view('pages.estabelecimentos.edit', ['estabelecimento' => $estabelecimento]);
    }

    public function update(Request $request, Estabelecimento $estabelecimento)
    {
        $updated = Estabelecimento::where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return Redirect::route('products.index');
        }

        return redirect()->back()->with('message', 'Error update');
    }

    public function destroy(Estabelecimento $estabelecimento)
    {
        //
    }
}
