<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FuncionarioController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rotas serviço

// Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index')->middleware(['auth', 'verified']);
// Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
// Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
// Route::get('/servicos/{servico}', [ServicoController::class, 'show'])->name('servicos.show');
// Route::get('/servicos/{servico}/edit', [ServicoController::class, 'edit'])->name('servicos.edit');
// Route::put('/servicos/{servico}', [ServicoController::class, 'update'])->name('servicos.update');
// Route::delete('/servicos/{servico}', [ServicoController::class, 'destroy'])->name('servicos.destroy');

Route::resource('servicos', ServicoController::class)->withTrashed()->middleware(['auth', 'verified']);

Route::resource('funcionarios', funcionarioController::class)->withTrashed()->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/agenda', function () {
    return view('pages/agenda');
})->middleware(['auth', 'verified'])->name('agenda');

Route::get('/cliente', function () {
    return view('pages/cliente');
})->middleware(['auth', 'verified'])->name('cliente');



Route::get('/-', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('servico');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
