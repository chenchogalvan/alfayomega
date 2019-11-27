@extends('nebula')

@section('content')
<div class="row">
    <div class="col s12 l6">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Advanced Form Inputs<i class="material-icons right tooltipped"
                        data-position="left" data-delay="50" data-tooltip="Get Code">more_vert</i></h5>

                <div class="succes-alert-bar p-15 m-b-20 red white-text" style="display: block;">
                    Please fill out all the required inputs.
                </div>

                <form enctype="multipart/form-data" action="{{ route('addProveedors.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input name="name" id="first_name" type="text">
                            <label for="first_name">Proveedor</label>
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
                        <div class="col s12 m12 l12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Logo (350x350)</span>
                                    <input name="imgLogo" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"
                                        placeholder="Sube un logo de 350x350 pixeles">
                                </div>
                                @error('imgLogo')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('imgLogo') }}</div>
                                    </div>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Portada (Estilo Horizontal)</span>
                                    <input name="imgPortada" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"
                                        placeholder="Sube una imagen de portada horizontal">
                                </div>
                                @error('imgPortada')
                                <span class="invalid-feedback" role="alert">
                                    <div class="errorTxt1">
                                        <div id="uname-error" class="error">{{ $errors->first('imgPortada') }}</div>
                                    </div>
                                </span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="shortDesc" id="message5" class="materialize-textarea" data-length="60"
                                cols="30"></textarea>
                            <label for="message5">Descripción corta</label>
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
                            <textarea name="longDesc" id="message5" class="materialize-textarea"
                                length="120"></textarea>
                            <label for="message5">Descripción completa</label>
                            @error('longDesc')
                            <span class="invalid-feedback" role="alert">
                                <div class="errorTxt1">
                                    <div id="uname-error" class="error">{{ $errors->first('longDesc') }}</div>
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


@push('js')

@endpush