<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tela de Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- Usando o helper asset() para carregar o CSS da pasta public --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
    <div class="row w-100 d-flex align-items-center justify-content-center">

      <div class="col-md-5 d-flex justify-content-center">
        <div class="login-container text-center">
          <div class="login-title mb-4">LOGIN</div>

          {{-- Formulário corrigido --}}
          <form action="{{ route('login.post') }}" method="POST">
            {{-- Token de segurança CSRF --}}
            @csrf

            {{-- Exibição de erros de login, se houver --}}
            @if ($errors->any())
              <div class="alert alert-danger text-start">
                  <ul class="mb-0" style="padding-left: 20px;">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            <div class="mb-3 text-start">
              <label for="cpf" class="form-label">CPF:</label>
              {{-- Adicionado o atributo name="cpf" --}}
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF" value="{{ old('cpf') }}" required>
            </div>
            <div class="mb-3 text-start">
              <label for="senha" class="form-label">Senha:</label>
              {{-- Adicionado o atributo name="senha" --}}
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-login w-100">ENTRAR</button>
          </form>

          <div class="mt-3 text-center">
            <a href="{{ route('register') }}" class="text-primary" style="text-decoration: none;">Faça seu cadastro</a>
          </div>
        </div>
      </div>

      <div class="col-md-5 image-col d-flex justify-content-center">
        {{-- Usando o helper asset() para carregar a imagem da pasta public --}}
        <img src="{{ asset('imagens/img_login.png') }}" alt="Igreja e árvore" class="image-side">
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>