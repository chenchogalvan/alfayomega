@extends('nebula')

@section('content')
<div class="row">
        <div class="col s12 l12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Galeria<i class="material-icons right tooltipped"
                            data-position="left" data-delay="50" data-tooltip="Selecciona un proveedor para agregar una galeria a su sección">help</i></h5>

                    <form enctype="multipart/form-data" action="{{ route('addGallery.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="proveedor_id">
                                    <option value="" disabled selected>Lista de proveedores</option>
                                    @forelse ($proveedores as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                <label>Selecciona un proveedor</label>
                            </div>
                            @error('proveedor_id')
                            <span class="invalid-feedback" role="alert">
                                <div class="errorTxt1">
                                    <div id="uname-error" class="error">{{ $errors->first('proveedor_id') }}</div>
                                </div>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn cyan">
                                        <span>Imagenes</span>
                                        <input type="file" name="img[]" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Sube una o más imagenes a la galeria">
                                    </div>
                                </div>
                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('img') }}</div>
                                    </div>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit">Agregar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endpush
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

@endpush
