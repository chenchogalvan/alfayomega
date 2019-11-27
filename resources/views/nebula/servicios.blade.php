@extends('nebula')

@section('content')
    <!-- Column -->
    <div class="row">
        <div class="col s12 l6 m6">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title activator">Agregar servicios<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="Agrega un nuevo producto a un proveedor">help</i></h5>
                    <form method="POST" action="{{ route('addServices.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="first_name" name="title" type="text">
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
                                <input id="first_name" name="longDesc" type="text">
                                <label for="first_name">Descripción</label>
                                @error('shortDesc')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('shortDesc') }}</div>
                                    </div>
                                </span>
                                @enderror
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
                                <th data-sort-initial="true" data-toggle="true">Titulo</th>
                                <th>Descripción</th>
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
                                        {{ $prov->title }}
                                    </td>
                                    <td>{{ $prov->longDesc }} </td>
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
