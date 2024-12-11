@extends('layout.site')

@section('titulo','Pagina de contatos')

<h3> Essa eh a visao contato </h3>

@section('conteudo')

@foreach ($matContatos as $contato)

<table border = "1">
    <tr>
    <td><p>{{ $contato['nome'] }}</td>
    <td><p>{{ $contato['cel'] }}</td>
    </tr>
</table>
@endforeach

@endsection
