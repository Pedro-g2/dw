@extends('layouts.app')

@section('title', 'Evangelho do dia')

@section('content')
<div class="container d-flex justify-content-center my-4">
    <div class="bg-white bg-opacity-50 rounded-4 shadow p-4 w-100" style="max-width: 800px;">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Evangelho do dia</h1>
            <h5 class="text-danger">Mateus 20-41</h5>
            <img src="{{ asset('imagens/biblia.png') }}" alt="Bíblia aberta" class="img-fluid my-3" style="max-width: 350px;">
        </div>
        <div>
            <p style="text-align: justify;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, urna eu tincidunt consectetur,
                nisi nisl aliquam enim, nec facilisis massa mauris ac dolor. Pellentesque habitant morbi tristique
                senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia curae; Integer nec odio. Praesent libero. Sed cursus ante
                dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent
                mauris.
            </p>
            <p style="text-align: justify;">
                Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class
                aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur
                sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean
                quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula
                vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.
            </p>
        </div>
    </div>
</div>
@endsection