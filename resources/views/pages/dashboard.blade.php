<!--Chargement du template de l'appli-->
@extends('/pages/layout')

<!--Inclusion de la barre de navigation-->
{{--@include('/pages/navigation')--}}

<!--Inclusion du footer-->
{{--@include('/pages/footer')--}}

<!--Contenu de la page-->
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h3 class="header-title m-t-0 m-b-20" style="color: #186bf6;">
                Etat de fonctionnement des modules
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p><span style="font-weight: bold">Date: {{  date('d-m-Y H:i:s') }}</span></p>

            <table class="">
                @foreach($modules as $module)
                    <tr>
                        <div class="card-box">
                            <a href="{{ route('printOne', $module->id) }}" target="_blank" class="btn btn-sm btn-default pull-right">Imprimer</a>

                            <h6 class="m-b-20 text-uppercase">{{ $module->module_name }}
                                @if($module->id == 2)
                                    <i class="fa fa-circle m-r-10" style="color: orangered"></i>
                                @else
                                    <i class="fa fa-circle m-r-10" style="color: lawngreen"></i>
                                @endif
                            </h6>
                            <div class="row">
                                <div class="col-sm-4">
                                    <p><i class="mdi mdi-source-branch mdi-24px text-primary"></i>&nbsp;Alimentation :
                                        <span class="badge badge-success">Normal</span></p>
                                    <p><i class="mdi mdi-battery-charging-30 mdi-24px text-primary"></i>&nbsp;Consommation d'énergie :
                                        @if($module->id == 2)<i class="mdi mdi-alert mdi-18px text-danger">
                                        </i>&nbsp;<span class="text-danger">Consommation anormale d'énergie</span>
                                        @endif
                                    </p>
                                </div>

                                <div class="col-sm-4">
                                    <p><i class="mdi mdi-wan mdi-24px text-primary"></i>&nbsp;Communication :
                                        <span class="badge badge-success">Normal</span></p>
                                    <p><i class="mdi mdi-white-balance-sunny mdi-24px text-primary"></i>&nbsp;Luminosité :
                                        <span class="badge badge-success">Normal</span></p>
                                </div>

                                <div class="col-sm-4">
                                    <p><i class="mdi mdi-target mdi-24px text-primary"></i>&nbsp;Champs de vison :
                                        <span class="badge badge-success">Normal</span></p>
                                    <p><i class="mdi mdi-thermometer mdi-24px text-primary"></i>Température :
                                        <span class="badge badge-success">Normal</span></p>
                                </div>

                            </div>

                        </div>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('printAll') }}" target="_blank">Générer la version pdf</a>
        </div>
    </div>
    <br><br><br>



@endsection