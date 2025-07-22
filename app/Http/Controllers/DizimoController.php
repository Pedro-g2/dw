<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DizimoController extends Controller
{
    /**
     * Mostra a página de pagamento do dízimo.
     */
    public function showPagamento()
    {
        // O Laravel busca o arquivo em: resources/views/dizimo/pagamento.blade.php
        return view('dizimo.pagamento');
    }
}