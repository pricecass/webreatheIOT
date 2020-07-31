<!--Chargement du template de l'appli-->
@extends('/pages/layout')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h4 class="header-title m-t-0 m-b-20" style="color: #186bf6;">Modules enregistrés</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tbody>
                @foreach($modules as $module)
                    <tr>
                        <th scope="row">{{ $module->module_name }}</th>
                        <td>
                            <p>Type: <span>{{ $module->module_type }}</span></p>
                            <p>Numéro:</p>
                            <p>Nombre de données envoyées:</p>
                        </td>
                        <td>
                            <p>Source d'alimentation:</p>
                            <p>Consommation d'énergie:</p>
                            <p>Température d'utilisation:</p>
                        </td>
                        <td>
                            <p>Matériau:</p>
                            <p>Dimension:</p>
                            <p>Poids:</p>
                        </td>
                        <td>
                            <p>Data:</p>
                            <p>Communication:</p>
                            <p>Entrée/Sortie:</p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection
