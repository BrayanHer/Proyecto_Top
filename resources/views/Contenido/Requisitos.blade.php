@extends('index')
@section('contenido')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-paw">
                </i>
            </div>
            <div>Proceso de adopción
                <div class="page-title-subheading">Al adoptar asumes un compromiso que durará muchos años, con un ser que dependerá absolutamente de ti.
                </div>
            </div>
        </div>   
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xl-12">
        <p align="justify">
            <b>Primero.</b> Debes llenar la solicitud de adopción en la cual tus datos personales están protegidos por la Ley para la 
            Protección de Datos Personales en Posesión de Particulares.
        </p>
        <p align="justify">
            <b>Segundo.</b> Te llamaremos para programar una cita y visitar el domicilio en donde vivirá tu adoptado, 
            a efecto de corroborar que existen las condiciones (de espacio, higiene, seguridad, estabilidad económica y confort) 
            para el bienestar y estabilidad del peludito.
        </p>
        <p align="justify">
            <b>Tercero.</b> Si, como consecuencia de la visita, se determina que existen condiciones para que continúe el proceso de adopción, 
            nos pondremos de acuerdo para entregarte al peludito. En tal caso deberás firmar un contrato por el cual la Asociación crea una 
            relación jurídica contigo, estableciendo obligaciones y derechos tendientes a salvaguardar la integridad y estabilidad del peludito. 
            Dicho contrato lo deberás firmar al margen y al calce en todas las páginas. Además deberás:
        </p>
        <ul>
            <li>
                <p align="justify">
                    <b>
                        Entregar copias de tu identificación oficial, comprobante de domicilio y en caso de ser extranjero tu forma migratoria.
                    </b>
                    Los cuales tienden a asegurar tu identidad y corroborar tu domicilio y serán anexos al contrato.
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Firmar el aviso de privacidad.
                    </b>
                    De conformidad con las disposiciones de la Ley para la Protección de Datos Personales en posesión de Particulares.
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Pagar la cuota de recuperación.
                    </b>
                    Los trámites de la adopción son gratuitos, sin embargo se le requiere el pago forzoso de una cuota de recuperación 
                    de $ 1.300 MXN (mil pesos mexicanos), la cual en ningún momento es reembolsable.
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Entrega del carnet de vacunación.
                    </b>
                    Te haremos entrega del carnet de vacunación.
                </p>
            </li>
            <li>
                <p align="justify">
                    <b>
                        Adquisición de la placa de identificación.
                    </b>
                    En el momento de la adopción deberás comprar una placa para tu adoptado en el que aparezca su nombre y los teléfonos de contacto.
                </p>
            </li>
        </ul>
        <p align="justify">
            <b>Cuarto.</b> Te tomaremos una fotografía con tu adoptado, que será publicada en redes sociales y se integrará en el expediente correspondiente.
        </p>
        <p align="justify">
            <b>Quinto.</b> Posteriormente, representantes de nuestra asociación, identificados adecuadamente, podrán realizar visitas periódicas para 
            verificar el bienestar de tu adoptado.
        </p>
        <p align="justify">
        Este es el Procedimiento de adopción al que voluntariamente y sin mediar error, dolo, violencia o mala fe decides someterte a fin de obtener en
        DONACION CONDICIONADA Y REVOCABLE un perro o gato.
        </p>
        <p align="justify">
            <b>¡Muchas gracias por su apoyo y comprensión!</b>
        </p>
    </div>
</div>
<a href="{{route('Adoptar')}}">
<div class="row">
    <div class="col-md-12 col-xl-12 col-lg-12 d-flex justify-content-center">
    
        <button class="mb-2 mr-2 btn btn-lg btn-block btn-transition btn-outline-primary"> Ir a formulario </button>
       
    </div>
     
</div></a>
@stop