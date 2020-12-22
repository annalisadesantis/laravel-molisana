@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "I prodotti | La Molisana")
{{-- contenuti --}}
@section("content")
    <section id="prodotti">
        <div class="container">
            <h3>Le lunghe</h3>
            <div class="card-container">
                @foreach ($pasta as $paste)
                    @if ($paste["tipo"] == "lunga")
                        <div class="card">
                            <img src="{{ $paste['src']}}" alt="{{ $paste['titolo']}}">
                            <div class="overlay">
                                <a href="#">
                                    {{ $paste["titolo"]}}
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <h3>Le corte</h3>
            <div class="card-container">
                @foreach ($pasta as $paste)
                    @if ($paste["tipo"] == "corta")
                        <div class="card">
                            <img src="{{ $paste['src']}}" alt="{{ $paste['titolo']}}">
                            <div class="overlay">
                                <a href="#">
                                    {{ $paste["titolo"]}}
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <h3>Le cortissime</h3>
            <div class="card-container">
                @foreach ($pasta as $paste)
                    @if ($paste["tipo"] == "cortissima")
                        <div class="card">
                            <img src="{{ $paste['src']}}" alt="{{ $paste['titolo']}}">
                            <div class="overlay">
                                <a href="#">
                                    {{ $paste["titolo"]}}
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
