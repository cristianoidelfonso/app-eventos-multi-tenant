<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        // Deleta todas variaveis de sessão
        session()->flush();

        // Libera todas as variáveis de sessão
        session_unset();
     
        Auth::logout();

        return redirect(route('home'));
    }
}
