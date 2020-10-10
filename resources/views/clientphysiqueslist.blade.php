<div>
    <table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Statut</th>
            <th scope="col">Salaire</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientphysiques as $clientphysique)
        <tr>
            <td>{{$clientphysique->nom}}</td>
            <td>{{$clientphysique->prenom}}</td>
            <td>{{$clientphysique->adresse}}</td>
            <td>{{$clientphysique->telephone}}</td>
            <td>{{$clientphysique->statut}}</td>
            <td>{{$clientphysique->salaire}}</td>
            <td>
                <a href="{{url('/showClientphysique/'.$clientphysique->id)}}" class="btn btn-sm btn-info">Afficher</a>
                <a href="{{url('/editClientphysique/'.$clientphysique->id)}}" class="btn btn-sm btn-warning">Editer</a>
                <a href="{{url('/destroyClientphysique/'.$clientphysique->id)}}" class="btn btn-sm btn-danger">Supprimer</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>