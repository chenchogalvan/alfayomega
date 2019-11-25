@extends('nebula')

@section('content')

<div class="card info-gradient m-t-0 m-b-0">
    <div class="card-content">
        <div class="p-b-40 p-t-20">
            <h3 class="white-text">¡Hola {{ Auth::user()->name }}!</h3>
            <p class="white-text op-7 m-b-20">Success is not a destination, its a Journey!!!</p>
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
                            <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">$250</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="card primary-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title  white-text">Información de contacto</h5>
                            <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">$250</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="card success-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title  white-text">Revenues</h5>
                            <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">$250</span></span></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3">
                    <div class="card danger-gradient card-hover">
                        <div class="card-content">
                            <h5 class="card-title white-text">Sales</h5>
                            <p class="m-b-5"><span class="white-text op-5">This Month <span class="right">88%</span></span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
