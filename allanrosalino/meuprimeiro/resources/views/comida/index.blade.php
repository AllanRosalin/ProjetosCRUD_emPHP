<h3>Essa eh a visao Comida</h3>

@foreach ($matComidas as $comida)

<table>
    <tr>
        <td><p> {{ $comida['prato'] }}</p></td>
        <td><p> {{ $comida['sobremesa'] }}</p></td>
        <td><p> {{ $comida['diversos'] }}</p></td>
    </tr>
</table>
@endforeach