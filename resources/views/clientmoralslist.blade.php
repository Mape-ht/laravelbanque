<div>
    <table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Raison social</th>
            <th scope="col">Adresse</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientmorals as $clientmoral)
        <tr>
            <td>{{$clientmoral->raisonsocial}}</td>
            <td>{{$clientmoral->adresse}}</td>
            <td>{{$clientmoral->telephone}}</td>
            <td>
                <a href="{{url('/show/'.$clientmoral->id)}}" class="btn btn-sm btn-info">Afficher</a>
                <a href="{{url('/edit/'.$clientmoral->id)}}" class="btn btn-sm btn-warning">Editer</a>
                <a href="{{url('/destroy/'.$clientmoral->id)}}" class="btn btn-sm btn-danger">Supprimer</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>