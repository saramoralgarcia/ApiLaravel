@extends("../layout.plantilla")

@section("cabecera")
 LEER REGISTROS
@endsection

@section("contenido")
<table border="2" class="contenidoTabla">
    <tr>
        <td>Nombre Cliente</td>
        <td>Correo Cliente</td>
        <td>Teléfono Cliente</td>
        <td>Dirección Cliente</td>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
        <td> <a href="{{route('clientes.edit', $cliente->id)}}"> {{ $cliente -> nombre }} </a></td>
        <td> {{ $cliente -> correo }} </td>
        <td> {{ $cliente -> telefono }} </td>
        <td> {{ $cliente -> direccion }} </td>

    </tr>
    @endforeach

    
</table>
@endsection


@section("pie")
@endsection

