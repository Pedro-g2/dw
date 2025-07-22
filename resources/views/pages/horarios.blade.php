@extends('layouts.app')

@section('title', 'Informações e Horários')

@section('content')
<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 600px;">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Informações e Horários</h1>
            <p class="text-muted">Confira os horários das missas, atendimentos e eventos da nossa paróquia</p>
        </div>
        <div class="d-flex flex-column gap-4 align-items-center">
            <div class="card shadow-sm w-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">🕊 Missas</h5>
                    <ul>
                        <li>Domingo - 08h, 10h e 19h</li>
                        <li>Segunda a sexta - 19h</li>
                        <li>Sábado - 18h</li>
                    </ul>
                </div>
            </div>
            <div class="card shadow-sm w-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">🎓 Catequese</h5>
                    <ul>
                        <li>Sábados - 14h às 16h</li>
                        <li>Domingos - 9h às 11h</li>
                    </ul>
                </div>
            </div>
            <div class="card shadow-sm w-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">💬 Confissões</h5>
                    <ul>
                        <li>Quinta-feira - 18h às 19h</li>
                        <li>Ou mediante agendamento</li>
                    </ul>
                </div>
            </div>
            <div class="card shadow-sm w-100">
                <div class="card-body">
                    <h5 class="card-title text-primary">📍 Localização</h5>
                    <p>Rua São João, 123 – Centro<br>Arinos - MG</p>
                    <p><strong>Telefone:</strong> (38) 99999-9999</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection