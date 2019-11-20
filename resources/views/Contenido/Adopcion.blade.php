@extends('index')
@section('contenido')
<style>
#tit{color:black ;}.btn-link:hover{color:white;}p{color:black;}b{color:black;font-size: 110%;}
</style>

<div class="accordion" id="accordionExample">
  <div class="card">

    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"aria-expanded="false" aria-controls="collapseOne">
          <span id="tit"> <i class="fa fa-paw" aria-hidden="true"></i> &nbsp;Solicitud de Adopción &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></span>
          
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
<b> Al adoptar asumes un compromiso que durará muchos años, con un ser que dependerá absolutamente de ti.</b>
<br><br>
<!-- _________________________ -->
<div class="row">
    <div class="col-md-12 col-xl-12">
        <p align="justify">
        El primer paso del proceso de adopción es rellenar la solicitud de adopción. Como es un documento que debe ir firmado junto a un aviso 
        de privacidad, puedes enviarnos tus datos ahora y firmar la solicitud en el momento de la visita.
        </p>
        <p align="justify">
        Yo manifiesto que soy mayor de edad y que estoy interesado en adoptar un perrito cuyo nombre indicaré a continuación. Estoy consciente 
        que al comenzar este trámite asumo un compromiso para  tener a mi lado a <b>un ser vivo</b>,  el cual en ningún momento consideraré una cosa 
        u objeto que se adquiere y desecha.
        </p>
        <p align="justify">
        Conozco el procedimiento, el cual se resume en:
        </p>
        <ul>
            <li>
                <p align="justify">
                    <b>
                        Compilar el presente formato de solicitud.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Visitarán mi domicilio para cerciorarse del espacio y seguridad.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Firmaré un contrato de donación que tiene plenos efectos legales.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Pagaré una cuota de recuperación:
                    </b>
                    $1300 (mil trescientos pesos 00/100 M.N.).
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Compraré una placa de identificación con el nombre del perro y mis datos de contacto.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Nos tomarán una foto con mi adoptado la cual será publicada en redes sociales.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Me entregarán el carnet de vacunación.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        En caso de no estar esterilizad@ me comprometeré a ello.
                    </b>
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Sé que habrá un seguimiento para verificar las condiciones de mi adoptado.
                    </b>
                </p>
            </li>
        </ul>
        <p align="justify">
            Para que los miembros de esta Asociación verifiquen las condiciones de espacio, seguridad, higiene y estabilidad económica que puedo brindarle 
            al animalito que pretendo adoptar,  señalaré a continuación mi domicilio y mis datos.
        </p>
        <p align="justify">
            <b>Los campos marcados con <red>*</red> son obligatorios.</b>
        </p>
    </div>
</div>
<!-- _________________________ -->
      </div>
    </div>
<!-- ______________________________________________________________________________________________________________________________________- -->
<div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <span id="tit"><i class="fa fa-paw" aria-hidden="true"></i> &nbsp;Registrar mi solicitud &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></span>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Formulario de adopción</h5>
       <!-- I N I C I A  F O R M U L A R I O  -->
       @include('Contenido.Form')
         <!-- I N I C I A  F O R M U L A R I O  -->
    </div>
</div>
      </div>
    </div>
  </div>
  </div>
  </div>

@stop
