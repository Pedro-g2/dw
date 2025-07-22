<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tela de Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    .image-side {
      background: transparent !important;
    }
  </style>
</head>
<body>
  <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
    <div class="row w-100 d-flex align-items-center justify-content-center">

      <div class="col-md-5 d-flex justify-content-center">
        <div class="login-container text-center">
          <div class="login-title mb-4">CADASTRO</div>


          {{-- Em resources/views/auth/register.blade.php --}}

<div class="login-title mb-4">CADASTRO</div>

  {{-- ============== INÍCIO DO BLOCO DE ERROS ============== --}}
  @if ($errors->any())
      <div class="alert alert-danger mb-3">
          <h5 class="alert-heading">Ops! Algo deu errado.</h5>
          <ul class="mb-0">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  {{-- =============== FIM DO BLOCO DE ERROS =============== --}}

  <form action="{{ route('register.post') }}" method="POST">
      @csrf
      {{-- ... resto do seu formulário ... --}}


          
          <form action="{{ route('register.post') }}" method="POST">
            
            @csrf

            <div class="mb-3 text-start">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="name" placeholder="Digite seu nome completo" required>
            </div>
            <div class="mb-3 text-start">
              <label for="cpf" class="form-label">CPF:</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
            </div>
            <div class="mb-3 text-start">
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="text" class="form-control" id="telefone" name="phone" placeholder="(XX) XXXXX-XXXX">
            </div>
            <div class="mb-3 text-start">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3 text-start">
              <label for="senha" class="form-label">Senha:</label>
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <div class="mb-4 text-start">
              <label for="confirmarSenha" class="form-label">Confirmar Senha:</label>
              <input type="password" class="form-control" name="senha_confirmation" id="confirmarSenha" placeholder="Confirme sua senha" required>
            </div>
            <button type="submit" class="btn btn-login w-100">CADASTRAR</button>
          </form>
        </div>
      </div>

      <div class="col-md-5 image-col d-flex justify-content-center">
        <img src="{{ asset('imagens/img_login.png') }}" alt="Igreja e árvore" class="image-side">
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>