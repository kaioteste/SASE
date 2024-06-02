<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\EstabelecimentoController;

Route::get('/', function () {
    if (Auth::check())
    {
        return redirect(route('dashboard'));
    }
    return view('welcome');
});

// PROFILE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); // Verificar se tem um usuário logado

Route::resource('estabelecimentos', EstabelecimentoController::class)->withTrashed()->middleware(['auth', 'verified']);

// SERVICOS
Route::resource('servicos', ServicoController::class)->withTrashed()->middleware(['auth', 'verified']);

// FUNCIONARIOS
Route::resource('funcionarios', FuncionarioController::class)->withTrashed()->middleware(['auth', 'verified']);

// Route::get('/agenda', function () {
//     return view('pages/agenda');
// })->middleware(['auth', 'verified'])->name('agenda');

// Route::get('/cliente', function () {
//     return view('pages/cliente');
// })->middleware(['auth', 'verified'])->name('cliente');

require __DIR__.'/auth.php';

/* Conciliar tudo isso será difícil, mas eu farei isso acontecer */

/* Notas: O que eu posso fazer para terminar esse trabalho em 6 dias?
 * 1: Planejar antecipadamente o que será feito e como será feito;
 *  - Irá ser feito o laravel primeiro, depois me preocuparei com a estética do site;
 *  - Tailwind terá que sair da água pro vinho, essa semana;
 * 2: Aplicar e transcrever para código; */

/* Planejamento:
 * Todo estabelecimento irá ter um endereço, mas como ele será armazenado?
 * Opção 1: Tabela externa: Isso irá também possibilitar a pesquisa por lugar
 * Opção 2: Tudo junto com os dados do estabelecimento, mas isso não ficaria desorganizado? */

