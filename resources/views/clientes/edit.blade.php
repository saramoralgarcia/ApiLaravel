@extends("../layout.plantilla")

@section("cabecera")
EDITAR REGISTROS
@endsection

@section("contenido")
    <form method="POST" action="/clientes/{{$cliente->id}}" class="contenidoFormulario">
    <table>
    <tr>
        <td>Nombre: </td>
        <td>
            <input type="text" name="nombre" id="nombre" value="{{$cliente->nombre}}">
            {{csrf_field()}}
            <!-- hidden para que no se vea en el formulario
            PUT lo podemos ver en route:list en la consola-->
            <input type="hidden" name="_method" value="PUT">
        </td>
    </tr>
    <tr>
        <td>Correo: </td>
        <td>
            <input type="text" name="correo" id="correo" value="{{$cliente->correo}}">
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Teléfono: </td>
        <td>
            <input type="text" name="telefono" id="telefono" value="{{$cliente->telefono}}">
            {{csrf_field()}}
        </td>
    </tr>
    <tr>
        <td>Dirección: </td>
        <td>
            <input type="text" name="direccion" id="direccion" value="{{$cliente->direccion}}">
            {{csrf_field()}}
        </td>
    </tr>
    
    <tr>
        <td>
            <input type="submit" name="enviar" id="enviar" value="enviar">
        </td>
        
        <td>
            <input type="reset" name="resetear" id="resetear" value="Resetear">
        </td>
        
    </tr>
        </table>
    </form>

    <form method="POST" action="/clientes/{{$cliente->id}}" class="contenidoFormulario">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="eliminar" id="eliminar" value="Eliminar Registro">
    </form 

@endsection


