@extends('index')

@section('content')
<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="/images/bc-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-breadcrumb-content text-center">
                    <h1>Servicios</h1>
                    <ul class="page-breadcrumb-links">
                        <li><a href="/">Inicio</a></li>
                        <li>Servicios</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->



<!--====================  about area ====================-->
<div class="about-area space__bottom--r120 ">
    <div class="container">
        <div class="row align-items-center row-25">
            <div class="col-md-6 order-2 order-md-1">
                <div class="about-content">
                    <!-- section title -->
                    <div class="section-title space__bottom--25">
                        {{-- <h3 class="section-title__sub">Science 1982</h3> --}}
                        <h2 class="section-title__title">Servicio con excelencia y calidad</h2>
                    </div>
                    <p class="about-content__text space__bottom--40">Nuestros servicios están orientados hacia la
                        atención directa a clientes del sector minero, principalmente en el soporte de servicio de
                        mantenimiento preventivo y correctivo de sus equipos hidráulicos y facilitándoles las tareas
                        cotidianas en conseguir y suministrar todas las refacciones de los mismos.</p>
                    <p class="about-content__text space__bottom--40">Contamos con un taller y personal capacitado que
                        nos permite atenderlo en forma rápida en casos de emergencia. Nuestra experiencia en el ramo nos
                        permite darle una solución inmediata, cumpliendo en tiempo y forma con la entrega de sus
                        equipos.</p>
                    <p class="about-content__text space__bottom--40">Si lo que busca es una solución completa a las
                        necesidades dentro de su empresa o industria, nosotros le podemos ayudar a encontrar la mejor
                        solución y surtirle cada uno de sus requerimientos.</p>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2">
                <div class="about-image space__bottom__lm--30">
                    <img src="/images/servicios.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of about area  ====================-->

<!--====================  cta area ====================-->
<div class="cta-area cta-area-bg bg-img" data-bg="/images/cta-bg2.jpg">
    <div class="cta-wrapper background-color--dark-overlay space__inner__top--50 space__inner__bottom--150">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="cta-block cta-block--default-color">
                        <p class="cta-block__light-text text-center">Más de <span>7</span> años</p>
                        <p class="cta-block__semi-bold-text cta-block__semi-bold-text--medium text-center">¿Tienes un
                            proyecto? Contactanos</p>
                        <p class="cta-block__bold-text text-center">(844) 418.1119</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of cta area  ====================-->

<!-- funfact include -->
<div class="funfact-wrapper space__top--m100">
    <!--====================  fun fact area ====================-->
    <div class="fun-fact-area space__bottom--r120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- fun fact wrapper -->
                    <div class="fun-fact-wrapper fun-fact-wrapper-bg bg-img"
                        data-bg="/images/funfact-bg.jpg">
                        <div class="fun-fact-inner background-color--default-overlay background-repeat--x-bottom space__inner--y30 bg-img">
                            <div class="fun-fact-content-wrapper">
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">985</h3>
                                    <h4 class="single-fun-fact__text">Projectos</h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">529</h3>
                                    <h4 class="single-fun-fact__text">Clientes</h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">888</h3>
                                    <h4 class="single-fun-fact__text">Martillos</h4>
                                </div>
                                <div class="single-fun-fact">
                                    <h3 class="single-fun-fact__number counter">100</h3>
                                    <h4 class="single-fun-fact__text">Proveedores</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of fun fact area  ====================-->
</div>


<!--====================  feature area ====================-->
<div class="feature-area space__bottom--r120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <!-- feature content wrapper -->
                <div class="feature-content-wrapper space__bottom--m35">
                    <div class="single-feature space__bottom--35">
                        <div class="single-feature__icon">
                            <img src="/assets/img/icons/feature-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="single-feature__content">
                            <h4 class="single-feature__title">Misión</h4>
                            <p class="single-feature__text">Nuestra misión es la de crecer y seguir
                                consolidándonos como una empresa líder en el mercado, y seguir brindando el
                                mejor servicio para nuestros clientes en la industria minera.
                            </p>
                        </div>
                    </div>
                    <div class="single-feature space__bottom--35">
                        <div class="single-feature__icon">
                            <img src="/assets/img/icons/feature-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="single-feature__content">
                            <h4 class="single-feature__title">Visión</h4>
                            <p class="single-feature__text">Seguir en el camino de la consolidación como empresa
                                líder brindar el servicio a través de una responsabilidad y un buen gusto en los
                                servicios otorgados, para lograr una entera satisfacción de nuestros clientes.
                            </p>
                        </div>
                    </div>
                    <div class="single-feature space__bottom--35">
                        <div class="single-feature__icon">
                            <img src="/assets/img/icons/feature-3.png" class="img-fluid" alt="">
                        </div>
                        <div class="single-feature__content">
                            <h4 class="single-feature__title">Objetivo</h4>
                            <p class="single-feature__text">Nuestro objetivo es brindar todo nuestro esfuerzo en
                                un servicio de excelencia que nos permita como resultado la plena satisfacción
                                de neutros clientes.
                            </p>
                        </div>
                    </div>
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



@endsection
