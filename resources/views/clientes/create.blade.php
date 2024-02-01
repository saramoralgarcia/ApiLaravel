@extends("../layout.plantilla")

@section("cabecera")
 INSERTAR REGISTROS
@endsection

@section("contenido")
    <form method="POST" action="/clientes" class="contenidoFormulario">
    <table>
    <tr>
        <td>Nombre: </td>
        <td>
            <input type="text" name="nombre" id="nombre">
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Correo: </td>
        <td>
            <input type="text" name="correo" id="correo">
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Teléfono: </td>
        <td>
            <input type="text" name="telefono" id="telefono">
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Dirección: </td>
        <td>
            <input type="text" name="direccion" id="direccion">
            {{csrf_field()}}
        </td>
    </tr>
    
    <tr>
        <td>
            <input type="submit" name="enviar" id="enviar" value="enviar">
        </td>
        <td>
            <input type="reset" name="borrar" id="borrar" value="borrar">
        </td>
    </tr>
        </table>
    </form>
@endsection
@section("pie")
@endsection

