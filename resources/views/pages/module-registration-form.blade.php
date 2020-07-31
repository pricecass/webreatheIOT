<!--Chargement du template de l'appli-->
@extends('/pages/layout')

@section('content')

    <!-- Affichage du message de succes apres enregistrement du module -->
    @if (session()->has('success'))
        <div class="row">
            <div class="col-sm-10 offset-1">
                <div class="alert alert-icon alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="mdi mdi-check-all"></i>
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-10 offset-1">
            <h4 class="header-title m-t-0 m-b-20" style="color: #186bf6;">Inscription d'un nouveau module</h4>

            <hr style="border: 1px solid #186Af6; border-radius: 2px;">

        </div>
    </div>

    <div class="row">
        <div class="col-md-10 offset-1">
            <form class="form-horizontal" role="form" method="post" action="{{ route('new-module') }}" >
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 col-form-label" for="module-name">Nom</label>
                            <div class="col-md-12">
                                <input type="text" name="module_name" id="module-name" class="form-control" placeholder="Nom du module">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-form-label" for="module-number">Numéro</label>
                            <div class="col-md-12">
                                <input type="text" id="module-number" name="module_number" class="form-control" placeholder="Numéro du module">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-form-label">Type</label>
                            <div class="col-md-12">
                                <select class="form-control" name="module_type">
                                    <option>--Choisir le type de module--</option>
                                    <option>Type1</option>
                                    <option>Type2</option>
                                    <option>Type3</option>
                                    <option>Type4</option>
                                    <option>Type5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-form-label">Description</label>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5" name="module_description"></textarea>
                            </div>
                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label class="col-md-3 col-form-label">Source d'énergie</label>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<select class="form-control" name="power_supply[]" id="power_supplyID" multiple>--}}
                                    {{--<option>--Choisir le type de module--</option>--}}
                                    {{--<option>Type1</option>--}}
                                    {{--<option>Type2</option>--}}
                                    {{--<option>Type3</option>--}}
                                    {{--<option>Type4</option>--}}
                                    {{--<option>Type5</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="m-b-20">

                            <h5 class="font-14 mt-3">Température</h5>

                                <div class="radio radio-primary">
                                    <input type="radio" name="temperature" id="radio1" value="1">
                                    <label for="radio1">
                                        -20°C
                                    </label>
                                </div>

                                <div class="radio radio-custom">
                                    <input type="radio" name="temperature"  id="radio2" value="2">
                                    <label for="radio2">
                                        70°C
                                    </label>
                                </div>

                                <div class="radio radio-primary">
                                    <input type="radio" name="temperature" id="radio3" value="3">
                                    <label for="radio3">
                                        85°C
                                    </label>
                                </div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="m-b-20">

                            <h5 class="font-14 mt-3">Durée de fonctionnement</h5>

                            <div class="radio radio-primary">
                                <input type="radio" name="operating_time" id="radio1" value="1">
                                <label for="radio1">
                                    100
                                </label>
                            </div>

                            <div class="radio radio-custom">
                                <input type="radio" name="operating_time"  id="radio2" value="2">
                                <label for="radio2">
                                    200
                                </label>
                            </div>

                            <div class="radio radio-primary">
                                <input type="radio" name="operating_time" id="radio3" value="3">
                                <label for="radio3">
                                    300
                                </label>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="m-b-20">

                            <h5 class="font-14 mt-3">Nombres de données envoyées</h5>

                            <div class="radio radio-primary">
                                <input type="radio" name="data_number" id="radio1" value="1">
                                <label for="radio1">
                                    100
                                </label>
                            </div>

                            <div class="radio radio-custom">
                                <input type="radio" name="data_number"  id="radio2" value="2">
                                <label for="radio2">
                                    200
                                </label>
                            </div>

                            <div class="radio radio-primary">
                                <input type="radio" name="data_number" id="radio3" value="3">
                                <label for="radio3">
                                    300
                                </label>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3">
                        <div class="m-b-20">

                            <h5 class="font-14 mt-3">Etat de marche</h5>

                            <div class="radio radio-primary">
                                <input type="radio" name="working_condition" id="radio1" value="etat1">
                                <label for="radio1">
                                    1
                                </label>
                            </div>

                            <div class="radio radio-custom">
                                <input type="radio" name="working_condition"  id="radio2" value="etat2">
                                <label for="radio2">
                                    2
                                </label>
                            </div>

                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-default">Annuler</button>
                </div>

            </form>

        </div>

    </div>
    <!-- end row -->

@endsection
