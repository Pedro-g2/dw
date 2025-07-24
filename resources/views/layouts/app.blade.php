<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Paróquia Nossa Senhora Aparecida - Arinos MG')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="main-container">
    @include('layouts.partials.navbar')

    <main class="py-4">
        {{-- Título adicionado aqui --}}
        <div class="container">
          <h1 class="text-center mb-4">Paróquia Nossa Senhora Aparecida - Arinos MG</h1>
        </div>
        
        @yield('content')
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>