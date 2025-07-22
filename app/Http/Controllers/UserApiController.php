<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FielApiController extends Controller
{
    public function index() { return User::all(); }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:users,cpf',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $fiel = User::create([
            'name' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json($fiel, 201);
    }

    public function show(User $fiel) { return $fiel; }

    public function update(Request $request, User $fiel)
    {
        // Adicionar validação similar ao store
        $fiel->update($request->all());
        return response()->json($fiel, 200);
    }

    public function destroy(User $fiel)
    {
        $fiel->delete();
        return response()->json(null, 204);
    }
}