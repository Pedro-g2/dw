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
            <div class="bg-light p-3 rounded-3 mb-4">
                <h4 class="fw-bold">Avançam as Obras da Reforma da Igreja Matriz</h4>
                <small class="text-muted">Publicado em 22 de julho de 2025</small>
                <p style="text-align: justify;" class="mt-2">
                    As obras de reforma da nossa amada Igreja Matriz seguem em ritmo acelerado. A primeira fase, focada na restauração do telhado e da fachada, está prestes a ser concluída. Agradecemos a todos os paroquianos pelas generosas doações que tornaram este sonho uma realidade. Continue colaborando para as próximas etapas!
                </p>
            </div>

            <div class="bg-light p-3 rounded-3 mb-4">
                <h4 class="fw-bold">Inscrições Abertas para a Catequese 2025</h4>
                <small class="text-muted">Publicado em 18 de julho de 2025</small>
                <p style="text-align: justify;" class="mt-2">
                    Estão oficialmente abertas as inscrições para as turmas de Catequese de Primeira Eucaristia e Crisma para o ano de 2025. As vagas são limitadas! Procure a secretaria paroquial para garantir a inscrição de seus filhos e filhas nesta importante jornada de fé e aprendizado cristão. Não deixe para a última hora.
                </p>
            </div>

            <div class="bg-light p-3 rounded-3">
                <h4 class="fw-bold">Campanha do Agasalho Aquece Corações em Arinos</h4>
                <small class="text-muted">Publicado em 15 de julho de 2025</small>
                <p style="text-align: justify;" class="mt-2">
                    Com a chegada do frio, nossa paróquia lança a Campanha do Agasalho "Aqueça um Irmão". Estamos arrecadando cobertores e roupas de frio em bom estado. As doações podem ser entregues na secretaria ou durante as missas de fim de semana. Sua solidariedade pode aquecer quem mais precisa neste inverno.
                </p>
            </div>
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
                <h4 class="fw-bold mb-3 text-start">Coordenadores de Pastoral</h4>
                
                {{-- Início da grade de cards --}}
                <div class="row">
                    {{-- Card 1 --}}
                    <div class="col-12 col-md-6 mb-4">
                        <div class="border rounded-3 p-3 h-100">
                            <strong>Pastoral da Catequese:</strong><br>
                            Ana Lúcia Fernandes<br>
                            <small class="text-muted">Contato: (38) 99911-1111</small>
                        </div>
                    </div>
                    {{-- Card 2 --}}
                    <div class="col-12 col-md-6 mb-4">
                        <div class="border rounded-3 p-3 h-100">
                            <strong>Pastoral do Dízimo:</strong><br>
                            Carlos Eduardo Santos<br>
                            <small class="text-muted">Contato: (38) 99922-2222</small>
                        </div>
                    </div>
                    {{-- Card 3 --}}
                    <div class="col-12 col-md-6 mb-4">
                        <div class="border rounded-3 p-3 h-100">
                            <strong>Pastoral da Família:</strong><br>
                            Beatriz e Ricardo Almeida<br>
                            <small class="text-muted">Contato: (38) 99933-3333</small>
                        </div>
                    </div>
                    {{-- Card 4 --}}
                    <div class="col-12 col-md-6 mb-4">
                        <div class="border rounded-3 p-3 h-100">
                            <strong>Pastoral da Juventude:</strong><br>
                            Gabriel Oliveira<br>
                            <small class="text-muted">Contato: (38) 99944-4444</small>
                        </div>
                    </div>
                     {{-- Card 5 --}}
                    <div class="col-12 col-md-6 mb-4">
                        <div class="border rounded-3 p-3 h-100">
                            <strong>Pastoral do Batismo:</strong><br>
                            Sônia Ribeiro Costa<br>
                            <small class="text-muted">Contato: (38) 99955-5555</small>
                        </div>
                    </div>
                </div>
                 {{-- Fim da grade de cards --}}

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