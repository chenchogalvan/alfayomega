@extends('nebula')

@section('content')
<div class="row">
    <div class="col s12 l6">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title activator">Advanced Form Inputs<i class="material-icons right tooltipped"
                        data-position="left" data-delay="50" data-tooltip="Get Code">more_vert</i></h5>

                <form enctype="multipart/form-data" action="{{ route('addProveedors.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12 m12 l12">
                            <input name="name" id="first_name" type="text">
                            <label for="first_name">Proveedor</label>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <select>
                                <option value="" disabled selected>Choose your profile</option>
                                <option value="1">Manager</option>
                                <option value="2">Developer</option>
                                <option value="3">Business</option>
                            </select>
                            <label>Select Profile</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input type="text" id="dob" class="datepicker">
                            <label for="dob">DOB</label>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Logo (350x350)</span>
                                    <input name="imgLogo" type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Sube un logo de 350x350 pixeles">
                                </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="shortDesc" id="message5" class="materialize-textarea" data-length="60" cols="30" ></textarea>
                            <label for="message5">Descripción corta</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="longDesc" id="message5" class="materialize-textarea" length="120"></textarea>
                            <label for="message5">Descripción completa</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" >Agregar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
