@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "I prodotti | La Molisana")
{{-- contenuti --}}
@section("content")
    <section id="prodotti">
        <div class="container">
            @foreach ($formati as $tipo => $pasta)
                <h3> Le {{ $tipo }} </h3>
                <div class="card-container">
                    @foreach ($pasta as $indice => $formato)
                        <div class="card">
                            <img src="{{ $formato['src']}}" alt="{{ $formato['titolo']}}">
                            <div class="overlay">
                                <a href="{{ route('pagina_dettagli', ['id' => $indice]) }}">
                                    {{ $formato["titolo"]}}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
