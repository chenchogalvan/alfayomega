@extends('index')


@section('content')


<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="/images/bc-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-breadcrumb-content text-center">
                    <h1>Equipos de demolición</h1>
                    <ul class="page-breadcrumb-links">
                        <li><a href="#">Inicio</a></li>
                        <li>Equipos de demolición</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->

<!--====================  feature area ====================-->
<div class="feature-area space__bottom--r120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <!-- feature content wrapper -->
                <div class="about-content">
                    <!-- section title -->
                    <div class="section-title space__bottom--25">
                        {{-- <h3 class="section-title__sub">Science 1982</h3> --}}
                        <h2 class="section-title__title">Martillos hidráulicos y equipo de demolición</h2>
                    </div>
                    <p class="about-content__text space__bottom--40">Tenemos la amplia experiencia en una gama de
                        equipos y algunos de ellos son las marcas Rammer, Bretec, BTI, Boart Longyear, Allied, en donde
                        son reconocidos a nivel mundial dentro de la industria minera, donde brindamos los servicios de
                        mantenimiento preventivo como correctivos, y puestas en marcha de los equipos como instalaciones
                        hidráulicas y toda lo de obra civil hasta el momento de dejar los equipos en funcionamiento, el
                        propósito de nosotros como empresa es en brindarle una satisfacción a nuestros clientes con los
                        resultados en servicios y como suministros de las piezas originales del fabricante y
                        equivalentes para sus equipos.</p>
                </div>
            </div>
            <div class="col-lg-6 space__bottom__md--40 space__bottom__lm--40 order-1 order-lg-2">
                <!-- feature content image -->
                <div class="feature-content-image">
                    <img src="/images/home-1.jpg" class="img-fluid" alt="">
                    <img src="/images/home-2.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of feature area  ====================-->




<div class="service-section space__bottom--r120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-item-wrapper space__bottom--m40">
                    <div class="row">
                        @forelse ($proveedores as $proveedor)
                            <div class="col-lg-4 col-md-6 col-12 space__bottom--40">
                                <div class="service-grid-item">
                                    <div class="service-grid-item__image">
                                        <div class="service-grid-item__image-wrapper">
                                            <a href="{{ route('proveedores', $proveedor) }}">
                                                <img src="{{ Storage::url($proveedor->imgLogo) }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                        <div class="icon">
                                            <i class="flaticon-002-welding"></i>
                                        </div>
                                    </div>
                                    <div class="service-grid-item__content">
                                        <h3 class="title">
                                            <a href="{{ route('proveedores', $proveedor) }}">{{ $proveedor->name }}</a>
                                        </h3>
                                        <p class="subtitle">{{ $proveedor->shortDesc }}</p>
                                        <a href="{{ route('proveedores', $proveedor) }}" class="see-more-link">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        @empty

                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
