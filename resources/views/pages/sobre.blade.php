@extends('layouts.app')

@section('title', 'Sobre')

@section('content')
<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 800px;">
        <div class="sobre-title text-center mb-4" style="font-size:2.5rem; font-weight:bold; color:orange;">Sobre Nós</div>
        <div class="sobre-text" style="font-size:1.2rem; color:#333; text-align:justify;">
            Esta página tem como objetivo informar sobre o propósito e as ações da nossa comunidade.
            Aqui buscamos acolher, orientar e evangelizar, promovendo valores cristãos e incentivando
            a participação ativa de todos os fiéis. Nosso site foi criado para facilitar o acesso às
            informações da paróquia, horários de missas, eventos e atividades religiosas.
            <br><br>
            Agradecemos sua visita e esperamos que esta plataforma possa aproximar ainda mais você
            da nossa missão de fé, amor e partilha.
        </div>
    </div>
</div>
@endsection