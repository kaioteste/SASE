<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\EstabelecimentoRequest;
    use Illuminate\Database\Eloquent\Builder;
use Redirect;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $user = Auth::user();
        $estabelecimentos = Estabelecimento::where('user_id', $user->id)->get();

        return view('pages.estabelecimentos.list', ['estabelecimentos' => $estabelecimentos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.estabelecimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstabelecimentoRequest $request)
    {
        $estabelecimento = Estabelecimento::create(
            $request->validated()
        );

        return Redirect::route('estabelecimentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estabelecimento $estabelecimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estabelecimento $estabelecimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estabelecimento $estabelecimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estabelecimento $estabelecimento)
    {
        //
    }
}
