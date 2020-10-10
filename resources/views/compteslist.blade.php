<div>
    <table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">Numero</th>
            <th scope="col">Clerib</th>
            <th scope="col">Solde</th>
            <th scope="col">Typefrais</th>
            <th scope="col">Typecompte</th>
            <th scope="col">Date Ouverture</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($comptes as $compte)
        <tr>
            <td>{{$compte->numero}}</td>
            <td>{{$compte->clerib}}</td>
            <td>{{$compte->solde}}</td>
            <td>{{$compte->typefrais}}</td>
            <td>{{$compte->typecompte}}</td>
            <td>{{$compte->dateouverture}}</td>
            <td>
                <a href="{{url('/showCompte/'.$compte->id)}}" class="btn btn-sm btn-info">Afficher</a>
                <a href="{{url('/editCompte/'.$compte->id)}}" class="btn btn-sm btn-warning">Editer</a>
                <a href="{{url('/destroyCompte/'.$compte->id)}}" class="btn btn-sm btn-danger">Supprimer</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>