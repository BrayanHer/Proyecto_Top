<script>
$(document).ready(function()
{
    $(".aceptado").click(function()
    {
      //alert($(this).closest('form').serialize());
      $("#tab-solicitudes").load('{{url('Aceptado')}}' + '?' + $(this).closest('form').serialize());
      //alert($(this).closest('form').serialize());
    });
    $(".rechazado").click(function()
    {
      //alert($(this).closest('form').serialize());
      $("#tab-solicitudes").load('{{url('Rechazado')}}' + '?' + $(this).closest('form').serialize());
      //alert($(this).closest('form').serialize());
    });
    $(".entregado").click(function()
    {
      //alert($(this).closest('form').serialize());
      $("#tab-solicitudes").load('{{url('Entregado')}}' + '?' + $(this).closest('form').serialize());
      //alert($(this).closest('form').serialize());
    });
});
</script>
  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Mascota</th>
        <th scope="col">Información</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
    @foreach( $solicitudes as $soli)
    @if($soli->status_form!="finalizado")
        @if($soli->status_form=="aceptado")
        <tr class="bg-success">
        @elseif($soli->status_form=="rechazado")
        <tr class="bg-danger">
        @else
        <tr>
        @endif
        <th scope="row">{{$soli->IdForA}}</th>
        <td>{{$soli->Nombre_Completo}}</td>
        <td>{{$soli->nombre_mascota}}</td>
        <td align="justify" style="font-size: 10px; min-width: 300px;">
          Mi domicilio está ubicado en {{$soli->Calle}} {{$soli->NumInt}}, {{$soli->NumExt}}, {{$soli->Colonia}}, 
          {{$soli->CP}} {{$soli->Delegacion}}, entre calle {{$soli->Entre_Calle}} y calle {{$soli->Y_Calle}}, 
          referencias: {{$soli->Referencias}}. 
          <br>
          La mascota convivira con personas de {{$soli->Edad_Familiares}} años, vivira en {{$soli->Vivienda_Mascota}},
          mi vivienda {{$soli->Animales_Vivienda}} cuenta con {{$soli->Cuantos_Tiene}} animales, que pueden ser {{$soli->Que_Animales}}.
          <br>
          Quiero adoptar por que "{{$soli->Porque_Adopta}}".
        </td>
        <td align="center">
        <form>
          <input type="text" name="id_mascota" value="{{$soli->id_mascota}}" hidden="true">
          <input type="text" name="IdForA" value="{{$soli->IdForA}}" hidden="true">
          <input type="text" name="id_usuario" value="{{$soli->id_usuario}}" hidden="true">
          @if($soli->status_form=="aceptado")
          <button type="button" class="btn btn-danger rechazado" data-toggle="tooltip" data-placement="top" title="Rechazar">
          <span class="fa fa-times-circle"></span></button>
          <button type="button" class="btn btn-primary entregado" data-toggle="tooltip" data-placement="top" title="Entregado">
          <span class="fa fa-paw"></span></button>
          @elseif($soli->status_form=="rechazado")
          <button type="button" class="btn btn-success aceptado" data-toggle="tooltip" data-placement="top" title="Aceptar">
          <span class="fa fa-check-circle"></span></button>
          @else
          <button type="button" class="btn btn-success aceptado" data-toggle="tooltip" data-placement="top" title="Aceptar">
          <span class="fa fa-check-circle"></span></button>
          <button type="button" class="btn btn-danger rechazado" data-toggle="tooltip" data-placement="top" title="Rechazar">
          <span class="fa fa-times-circle"></span></button>
          @endif
        </form>
        </td>
      </tr>
    @endif
    @endforeach
    </tbody>
  </table>