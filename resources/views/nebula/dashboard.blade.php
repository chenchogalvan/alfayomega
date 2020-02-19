@extends('nebula')

@section('content')

<div class="card info-gradient m-t-0 m-b-0">
    <div class="card-content">
        <div class="p-b-40 p-t-20">
            <h3 class="white-text">¡Hola {{ Auth::user()->name }}!</h3>
            <p class="white-text op-7 m-b-20">No tienes mensajes nuevos el día de hoy</p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- col -->
        <div class="col s12 l12">
            <div class="row">
                <div class="col s12 m3 l3">
                    <div class="card warning-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title  white-text">Proveedores</h5>
                        <p class="m-b-5"><span class="white-text op-5">Registrados en el sistema <span class="right">{{ $proveedores }}</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="card primary-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title  white-text">Mensajes de contacto</h5>
                            <p class="m-b-5"><span class="white-text op-5">Total de mensajes en la semana <span class="right">0</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="card success-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title  white-text">Servicios </h5>
                            <p class="m-b-5"><span class="white-text op-5">Servicios registrados <span class="right">{{ $servicios }}</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="card danger-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title white-text">Producos</h5>
                            <p class="m-b-5"><span class="white-text op-5">Productos registrados <span class="right">{{ $productos }}</span></span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
