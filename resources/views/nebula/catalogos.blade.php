@extends('nebula')

@section('content')
    <!-- Column -->
    <div class="row">
        <div class="col s12 l6 m6">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Agregar catalogos<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="Agrega un nuevo catalogo a un proveedor">help</i></h5>
                    <form method="POST" action="{{ route('addCatalogo.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" name="title" type="text">
                                <label for="first_name">Titulo</label>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('title') }}</div>
                                    </div>
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" name="url" type="text">
                                <label for="first_name">URL</label>
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('url') }}</div>
                                    </div>
                                </span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn cyan">
                                        <span>Catalogo</span>
                                        <input type="file" name="url" accept="application/pdf" >
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Sube un catalogo">
                                    </div>
                                </div>
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('url') }}</div>
                                    </div>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <select name="proveedor_id">
                                    <option value="" disabled selected>Lista de proveedores</option>
                                    @forelse ($proveedores as $prov)
                                    <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                <label>Selecciona un proveedor del producto</label>
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
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" >Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

@endsection


@push('js')
    <!-- Footable -->
    <script src="/assets/admin/js/footable/dist/footable.all.min.js"></script>
    <script src="/assets/admin/js/pages/footable/footable-init.js"></script>
@endpush
