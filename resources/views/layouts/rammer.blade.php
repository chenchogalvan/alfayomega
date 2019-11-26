@extends('index')

@section('content')
<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="/images/bc-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-breadcrumb-content text-center">
                    <h1>Rammer</h1>
                    <ul class="page-breadcrumb-links">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="{{ route('equipo') }}">Equipos de demolicion</a></li>
                        <li>Rammer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->






<div class="project-section space__bottom--r120">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>


<!--====================  service details ====================-->
<div class="service-section space__bottom--r120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 order-1 order-lg-2">
                <div class="service-details">
                    <div class="service-gallery">
                        <div class="service-gallery__wrapper">
                            <div class="service-gallery__single-slide">
                                <div class="item">
                                    <img src="/images/slider.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content space__top--30">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="space__bottom--15">{{ $proveedor->name }}</h3>
                                <p>{{ $proveedor->longDesc }}</p>
                            </div>



                            <div class="col-lg-12" style="margin-top:50px;">
                                <div class="project-item-wrapper space__bottom--m40">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 space__bottom--40">
                                            <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                                <a class="single-project-item p-0" href="project-details.html">
                                                    <img src="/images/martillos/excellence-line.png" class="img-fluid"
                                                        alt="">
                                                    <span class="single-project-title">Excellence line</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12 space__bottom--40">
                                            <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                                <a class="single-project-item p-0" href="project-details.html">
                                                    <img src="/images/martillos/performance-line.png" class="img-fluid"
                                                        alt="">
                                                    <span class="single-project-title">Performance line</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 order-2 order-lg-1 space__top__md--50 space__top__lm--50">
                <div class="sidebar">
                    <h3 class="sidebar-title">Martillos y equipo de construccion</h3>
                    <ul class="sidebar-list">
                        @forelse ($prov as $prov)
                        <li><a href="{{ route('proveedores', $prov) }}"><i class="fa fa-check"></i>{{ $prov->name }}</a></li>
                        @empty

                        @endforelse
                    </ul>
                </div>
                <div class="sidebar">
                    <h3 class="sidebar-title">Descarga nuestra presentación</h3>
                    <ul class="sidebar-list">
                        <li><a href="#"><i class="fa fa-file-pdf-o"></i>presentacion.PDF</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of service details  ====================-->
@endsection
