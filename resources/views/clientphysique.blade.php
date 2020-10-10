<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Client Particulier</title>
  </head>
  <body>
  @include("navbar")

  @if($layout == 'indexClientphysique')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("clientphysiqueslist")
        </section>
        <section class="col"></section>
      </div>
    </div>

  @elseif($layout == 'createClientphysique')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("clientphysiqueslist")
        </section>
        <section class="col">
        <form action="{{url('/storeClientphysique')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
          </div>
          <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse">
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone">
          </div>
          <div class="form-group">
            <label for="statut"Statut</label>
            <input type="text" class="form-control" id="statut" name="statut" placeholder="statut">
          </div>
          <div class="form-group">
            <label for="salaire">Salaire</label>
            <input type="text" class="form-control" id="salaire" name="salaire" placeholder="salaire">
          </div>
          <input type="submit" class="btn btn-info" value="Enregistrer">
          <input type="reset" class="btn btn-warning" value="Annuler">
        </form>
        </section>
      </div>
    </div>
  
  @elseif($layout == 'showClientphysique')
    <div class="container-fluid">
      <div class="row">  
        <section class="col">
          @include("clientphysiqueslist")
        </section>
        <section class="col"></section>
      </div>  
    </div>
  
  @elseif($layout == 'editClientphysique')
    <div class="container-fluid">
      <div class="row">  
        <section class="col">
          @include("clientphysiqueslist")
        </section>
        <section class="col">
        <form action="{{url('/updateClientphysique/'.$clientphysique->id)}}" method="post">
          @csrf
          <div class="form-group">
            <label for="nom">Nom</label>
            <input value="{{$clientphysique->nom}}" type="text" class="form-control" id="nom" name="nom" placeholder="nom">
          </div>
          <div class="form-group">
            <label for="prenom">prenom</label>
            <input value="{{$clientphysique->prenom}}" type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input value="{{$clientphysique->adresse}}" type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse">
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input value="{{$clientphysique->telephone}}" type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone">
          </div>
          <div class="form-group">
            <label for="statut">Statut</label>
            <input value="{{$clientphysique->statut}}" type="text" class="form-control" id="statut" name="statut" placeholder="statut">
          </div>
          <div class="form-group">
            <label for="salaire">Salaire</label>
            <input value="{{$clientphysique->salaire}}" type="text" class="form-control" id="salaire" name="salaire" placeholder="salaire">
          </div>
          <input type="submit" class="btn btn-info" value="Update">
          <input type="reset" class="btn btn-warning" value="Annuler">
        </form>
        </section>
      </div>  
    </div>
  @endif



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>