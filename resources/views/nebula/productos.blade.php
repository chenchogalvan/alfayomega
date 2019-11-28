@extends('nebula')

@section('content')
    <!-- Column -->
    <div class="row">
        <div class="col s12 l6 m6">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Agregar productos<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="Agrega un nuevo producto a un proveedor">help</i></h5>
                    <form method="POST" action="{{ route('addProducts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" name="name" type="text">
                                <label for="first_name">Nombre</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('name') }}</div>
                                    </div>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
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
                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Imagen</span>
                                        <input type="file" name="img">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Imagen de portada o descriptiva">
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

                        <h6 class="font-medium" style="margin-top:20px;">Campos opcionales</h6>

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" name="shortDesc" type="text">
                                <label for="first_name">Descripción</label>
                            </div>
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

        <div class="col s12 l6 m6">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Lista de productos</h4>
                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                        <thead>
                            <tr>
                                <th data-sort-initial="true" data-toggle="true">Nombre</th>
                                <th>Pertenece a:</th>
                                <th>Estado</th>
                                <th data-sort-ignore="true" class="min-width">Acción</th>
                            </tr>
                        </thead>
                        <div class="m-t-40">
                            <div class="d-flex">
                                <div class="ml-auto">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tbody>
                            @forelse ($productos as $prov)
                                <tr>
                                    <td>
                                        <div class="chip">
                                            <img src="{{ Storage::url($prov->img) }}" alt="Contact Person"> {{ $prov->name }}
                                        </div>
                                    </td>
                                    <td>{{ $prov->proveedor->name }}</td>
                                    <td><span class="label label-table {{ $prov->show == 'yes' ? 'label-success' : 'label-danger' }}">{{ $prov->show == 'yes' ? 'Activo' : 'Inactivo' }}</span> </td>
                                    <td>
                                        <button type="button" class="btn btn-small btn-outline delete-row-btn"><i class="ti-close" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="text-right">
                                        <ul class="pagination">
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
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
