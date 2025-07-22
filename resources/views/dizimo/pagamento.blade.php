{{-- resources/views/dizimo/pagamento.blade.php --}}
@extends('layouts.app')

@section('title', 'Área do Dizimista - Pagamento')

@section('content')
<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 800px;">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Área do Dizimista</h1>
            <p class="lead">Bem-vindo(a), {{ Auth::user()->name }}!</p> {{-- Exibe o nome do usuário logado --}}
            <p>Aqui você pode realizar o pagamento do seu dízimo e contribuir com a nossa Paróquia.</p>
        </div>

        <hr class="my-4">

        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Opções de Pagamento do Dízimo</h2>

            {{-- Opção de Pagamento PIX (QR Code e Chave) --}}
            <div class="card mb-4 mx-auto" style="max-width: 400px;">
                <div class="card-header bg-primary text-white fw-bold">Pagamento via PIX</div>
                <div class="card-body">
                    <p class="card-text">Escaneie o QR Code abaixo ou utilize a chave PIX:</p>
                    <img src="{{ asset('imagens/qrcode_ficticio.png') }}" alt="QR Code Fictício" class="img-fluid mb-3" style="max-width: 200px;">
                    <p class="fw-bold mb-1">Chave PIX (CNPJ):</p>
                    <p class="fs-5 text-success">33.444.555/0001-66</p> {{-- Chave CNPJ fictícia --}}
                    <small class="text-muted">Favorecido: Igreja Matriz de Arinos</small>
                </div>
            </div>

            {{-- Opção de Pagamento via Dados Bancários --}}
            <div class="card mx-auto" style="max-width: 400px;">
                <div class="card-header bg-primary text-white fw-bold">Depósito/Transferência Bancária</div>
                <div class="card-body text-start">
                    <p class="card-text mb-2">Dados para depósito ou transferência:</p>
                    <ul class="list-unstyled">
                        <li><strong>Banco:</strong> Banco Fictício S.A.</li>
                        <li><strong>Agência:</strong> 0001</li>
                        <li><strong>Conta Corrente:</strong> 123456-7</li>
                        <li><strong>CNPJ:</strong> 33.444.555/0001-66</li>
                        <li><strong>Favorecido:</strong> Igreja Matriz de Arinos</li>
                    </ul>
                    <small class="text-muted">Por favor, envie o comprovante para (38) 99999-0000 após a contribuição.</small>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <p class="text-muted">Sua contribuição é muito importante para a manutenção e obras da Paróquia.</p>
            <p class="fw-bold">Deus o abençoe!</p>
        </div>
        
        {{-- Botão de Sair/Logout --}}
        <div class="text-center mt-5">
            <form method="POST" action="{{ route('logout') }}"> {{-- Rota de logout da sua API manual --}}
                @csrf
                <button type="submit" class="btn btn-danger btn-lg">Sair da Área do Dizimista</button>
            </form>
        </div>

    </div>
</div>
@endsection