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
                                        @forelse ($productos as $prod)
                                            <div class="col-lg-6 col-md-6 col-12 space__bottom--40">
                                                <div class="single-project-wrapper single-project-wrapper--reduced-abs">
                                                    <a class="single-project-item p-0" href="{{ $prod->url }}">
                                                        <img src="{{ Storage::url($prod->img) }}" class="img-fluid"
                                                            alt="">
                                                        <span class="single-project-title">{{ $prod->name }}</span>

                                                    </a>
                                                </div>
                                                <p>{{ $prod->shortDesc }}</p>
                                            </div>
                                        @empty


                                        @endforelse


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin: 50px 0;">
                                <div class="project-item-wrapper space__bottom--m40">
                                    <div class="row">
                                        <div class="wrapper">
                                            <h1>Servicios y/o refacciones</h1>
                                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                                                @foreach ($servicios as $serv)
                                                <li><a href="#{{ str_slug($serv->title) }}" @if ($loop->first) class="active" @endif >{{ $serv->title }}</a></li>
                                                @endforeach
                                            </ul>
                                            <section id="first-tab-group" class="tabgroup">
                                                @foreach ($servicios as $serv)
                                                <div class="col-lg-12" id="{{ str_slug($serv->title) }}">
                                                    <h2 class="col-md-12">{{ $serv->title }}</h2>
                                                    @if ($loop->first)
                                                    <img src="http://alfayomega.test/images/slider.png" alt="" class="img-fluid rounded mx-auto d-block">
                                                    @endif

                                                    <p style="margin:20px 0;">{{ $serv->longDesc }}</p>
                                                        </div>

                                                      @endforeach


                                                  </section>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin: 50px 0;">
                                <div class="project-item-wrapper space__bottom--m40">
                                    <div class="col-12">
                                        <div class="row row-5 image-popup">
                                            <h1 style="margin: 20px 0;">Servicios y/o refacciones</h1>
                                            @foreach ($galeria as $galeria)
                                                <div class="col-xl-4 col-lg-4 col-sm-6 col-12 space__top--10">
                                                    <a href="{{ Storage::url($galeria->img) }}" class="gallery-item single-gallery-thumb"><img src="{{ Storage::url($galeria->img) }}" class="img-fluid" alt=""><span class="plus"></span></a>
                                                </div>
                                            @endforeach
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

@push('js')
    <script>
    $('.tabgroup > div').hide();
$('.tabgroup > div:first-of-type').show();
$('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();

})

    </script>
@endpush

@push('css')
    <style>

.wrapper {
  margin: 30px auto;
  width: 100%;
  font-family: sans-serif;
  color: #555;
  font-size: 14px;
  line-height: 24px;
}

.tabs li {
  float: left;
  display: inline-block;
}
.tabs a {
  display: block;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  color: #888;
  padding: 15px 10.5px;
    line-height: 45px;
  border-bottom: 2px solid #888;
  background: #f7f7f7;


}
.tabs a:hover,
.tabs a.active {
  background: #ddd;
}
.tabgroup div {
  padding: 30px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
@endpush
