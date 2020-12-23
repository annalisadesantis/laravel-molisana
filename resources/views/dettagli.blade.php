@extends("layouts.app")

{{-- titolo --}}
@section("page-title", "I dettagli prodotti | La Molisana")

{{-- cdn fontawesome --}}
@section('script-fontawesome')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
@endsection

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
                <table>
                    <tr>
                        <td>
                            <img src="{{ asset('images/logo-molisana.png')}}" alt="Logo Molisana">
                        </td>
                        <td>
                            Grano Decorticato a Pietra <br> trafilatura al Bronzo
                        </td>
                        <td>
                            <img src="{{ asset('images/acqua-molise.png')}}" alt="Logo Molisana">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ $formato['titolo']}}
                        </td>
                        <td>
                            <i class="far fa-clock"></i>
                            Tempi di Cottura: {{ $formato['cottura']}}
                        </td>
                        <td>
                            {{ $formato['peso']}}
                        </td>
                    </tr>
                </table>
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
