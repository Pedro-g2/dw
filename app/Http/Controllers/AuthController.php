<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() { return view('auth.login'); }
    public function showRegisterForm() { return view('auth.register'); }

    // ----- Registro de Usuário ----
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:users,cpf',
            'phone' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email',
            'senha' => 'required|string|min:8|confirmed', // 'confirmed' checa o campo 'senha_confirmation'
        ]);

        $fiel = User::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'phone' => $request->telefone,
            'email' => $request->email,
            'password' => Hash::make($request->senha),
        ]);

        return redirect()->route('dizimo.pagamento')->with('success', 'Cadastro realizado com sucesso!');
    }

    // ----- Autenticação de Usuário ----
    public function login(Request $request)
    {
        $request->validate(['cpf' => 'required', 'senha' => 'required']);

        $fiel = User::where('cpf', $request->cpf)->first();

        if ($fiel && Hash::check($request->senha, $fiel->password)) {
            Auth::guard('fiel')->login($fiel); // <<--- IMPORTANTE
            return redirect()->intended(route('dizimo.pagamento'));
        }

        return back()->withErrors(['cpf' => 'CPF ou senha inválidos.'])->onlyInput('cpf');
    }

    // ----- Logout ----
   public function logout(Request $request)
    {
        Auth::guard('fiel')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

}