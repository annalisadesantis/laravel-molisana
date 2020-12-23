@extends("layouts.app")
{{-- titolo --}}
@section("page-title", "I dettagli prodotti | La Molisana")
{{-- contenuti --}}
@section("content")
    <section id="pagina_dettagli">
        <div class="titolo-prodotto">
            <h1>
                {{ $formato['titolo']}}
            </h1>
        </div>
        <div class="header-prodotto">
            <img src="{{ $formato['src-h']}}" alt="{{ $formato['titolo']}}">
        </div>
        <div class="pack-prodotto">
            <img src="{{ $formato['src-p']}}" alt="{{ 'confezione' . $formato['titolo']}}">
        </div>
        <div class="descrizione">
            <div class="container">
                <p>
                    {!! $formato['descrizione'] !!}
                </p>
            </div>
        </div>
        <div class="posate">
            <img src="{{ asset('images/posate-classiche.jpg')}}" alt="">
        </div>
    </section>
@endsection
