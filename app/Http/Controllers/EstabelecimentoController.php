<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Estabelecimento;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Endereco;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    // CREATE
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    // STORE
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name_dono' => ['required', 'string', 'max:100'],
            'name_estabelecimento' => ['required', 'string', 'max:100'],
            'telefone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name_dono' => $request->name_dono,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'name_estabelecimento' => $request->name_estabelecimento,
            'password' => Hash::make($request->password),
        ]);

        $endereco = new endereco();
        $endereco->cidade = $request->input('cidade');
        $endereco->cep = $request->input('cep');
        $endereco->bairro = $request->input('bairro');
        $endereco->rua = $request->input('rua');
        $endereco->numeroEstab = $request->input('numeroEstab');
        $endereco->complemento = $request->input('complemento');
        $endereco->id_users = $user->id;
        $endereco->save();



        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
