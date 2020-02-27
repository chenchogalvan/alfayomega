@extends('nebula')

@section('content')
<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Editar galerias</h5>
    </div>
</div>

@csrf
<div class="container-fluid">
    <div class="row el-element-overlay">

        @foreach ($proveedor as $p)
        <form enctype="multipart/form-data" action="{{ route('addGallery.destroy', $p) }}" method="POST">
            @method('PUT')
            <div class="col m6 l3">
                <div class="card">
                    <div class="card-image">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{ Storage::url($p->imgLogo) }}"
                                    alt="user" />
                                <div class="el-overlay">
                                    <ul class="el-info">
                                        <li><button class="btn-floating image-popup-vertical-fit"
                                                href="{{ Storage::url($p->imgLogo) }}"><i
                                                    class="material-icons">search</i></button></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                            <h5 class="m-b-0">{{$p->name}}</h5>
                                <small><a href="{{ route('nebula.galeria.editar', $p->id) }}" style="color:#000;">Editar galeria</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @endforeach


    </div>
</div>


@endsection


@push('css')
<link href="/assets/admin/css/pages/user-card.css" rel="stylesheet">
<link href="/assets/admin/js/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
@endpush
@push('js')
<script src="/assets/admin/js/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="/assets/admin/js/magnific-popup/meg.init.js"></script>

@endpush
