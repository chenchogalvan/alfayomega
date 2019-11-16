@extends('index')

@section('content')
<!--====================  breadcrumb area ====================-->
<div class="page-breadcrumb bg-img space__bottom--r120" data-bg="/images/bc-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-breadcrumb-content text-center">
                    <h1>Contacto</h1>
                    <ul class="page-breadcrumb-links">
                        <li><a href="/">Inicio</a></li>
                        <li>Contacto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of breadcrumb area  ====================-->


<!--====================  contact area ====================-->
<div class="conact-section space__bottom--r120">
    <div class="container">
        <div class="row">
            <div class="col space__bottom--40">
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.392355023501!2d-100.99186288476304!3d25.391673930013447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86887376374dd121%3A0x64b25c036350d841!2sALFA%20Y%20OMEGA%20SERVICIOS%20INDUSTRIALES!5e0!3m2!1ses-419!2smx!4v1573928376488!5m2!1ses-419!2smx"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="contact-information">
                    <h4 class="space__bottom--30">Información de contacto</h4>
                    <ul>
                        <li>
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <span class="text"><span>Calle 2 # 2644, Miguel Hidalgo, 25096 Saltillo, Coah.</span></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <span class="text"><a href="#">(844) 418.1119</a></span>
                        </li>
                        <li>
                            <span class="icon"><i class="fa fa-envelope-open"></i></span>
                            <span class="text"><a href="#">contacto@alfayomegaservices.com </a><a href="#">servicios@alfayomegaservices.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="contact-form">
                    <h4 class="space__bottom--30">Dejanos un mensaje</h4>
                    <form id="contact-form" action="/assets/php/mail.php" method="post">
                        <div class="row row-10">
                            <div class="col-md-6 col-12 space__bottom--20"><input name="con_name" type="text"
                                    placeholder="Nombre"></div>
                            <div class="col-md-6 col-12 space__bottom--20"><input name="con_email" type="email"
                                    placeholder="Correo"></div>
                            <div class="col-12"><textarea name="con_message" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-12"><button>Enviar mensaje</button></div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of contact area  ====================-->
@endsection
