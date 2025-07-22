@extends('layouts.app')

@section('title', 'Paróquia - Página Inicial')

@section('content')
<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 800px;">
        <div class="text-center mb-4">
            <img src="{{ asset('imagens/img_login.png') }}" alt="Igreja e árvore" class="image-side img-fluid"
                style="max-width: 500px; width: 100%; height: auto;">
        </div>
        <div>
            <p style="text-align: justify;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt
                consectetur,
                nisi nisl aliquam enim, nec facilisis massa mauris ac dolor. Pellentesque habitant morbi
                tristique
                senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia curae; Integer nec odio. Praesent libero. Sed cursus
                ante
                dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                Praesent
                mauris.
            </p>
            <p style="text-align: justify;">
                Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class
                aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur
                sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
                Aenean
                quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula
                vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.
            </p>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 800px;">
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="{{ asset('imagens/pastor.png') }}" alt="Coordenador da Pastoral" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-8">
                <h4 class="fw-bold mb-2">Coordenadores da Pastoral</h4>
                <p class="mb-1"><strong>Maria da Silva</strong> – Coordenadora Geral</p>
                <p class="mb-3"><strong>João Pereira</strong> – Vice-Coordenador</p>
                <p>
                    Nossa equipe de coordenação está sempre pronta para acolher, orientar e servir a comunidade. Entre em contato conosco para saber mais sobre as atividades e projetos da pastoral.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 800px;">
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-3 mb-md-0">
                <img src="{{ asset('imagens/telefone.png') }}" alt="Contato da Paróquia" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
            <div class="col-md-8">
                <h5 class="fw-bold mb-3">Contato da Paróquia</h5>
                <p class="mb-1"><strong>Endereço:</strong> Rua das Flores, 123 – Centro, Arinos/MG</p>
                <p class="mb-1"><strong>Telefone:</strong> (38) 99999-8888</p>
                <p class="mb-0"><strong>Email:</strong> paroquiaarinos@email.com</p>
            </div>
        </div>
    </div>
</div>

<div style="height: 80px;"></div>
@endsection