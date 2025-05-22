@extends('welcome')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Resultados de búsqueda para: <span class="text-blue-600">{{ $query }}</span></h2>
    @if(count($resultados) > 0)
        <ul class="space-y-2">
            @foreach($resultados as $resultado)
                <li>
                    <a href="{{ $resultado['url'] }}" class="text-blue-600 hover:underline font-semibold">{{ $resultado['titulo'] }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <div class="text-red-600 font-semibold">No hay coincidencias.</div>
    @endif
</div>
@endsection
