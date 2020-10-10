<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Compte</title>
  </head>
  <body>
  @include("navbar")

  @if($layout == 'indexCompte')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("compteslist")
        </section>
        <section class="col"></section>
      </div>
    </div>

  @elseif($layout == 'createCompte')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("compteslist")
        </section>
        <section class="col">
        <form action="{{url('/storeCompte')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="numero">Numero</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="numero">
          </div>
          <div class="form-group">
            <label for="clerib">Clerib</label>
            <input type="text" class="form-control" id="clerib" name="clerib" placeholder="clerib">
          </div>
          <div class="form-group">
            <label for="solde">Solde</label>
            <input type="number" class="form-control" id="solde" name="solde" placeholder="solde">
          </div>
          <div class="form-group">
            <label for="typefrais">Type Frais</label>
            <input type="text" class="form-control" id="typefrais" name="typefrais" placeholder="typefrais">
          </div>
          <div class="form-group">
            <label for="typecompte">Type Compte</label>
            <input type="text" class="form-control" id="typecompte" name="typecompte" placeholder="typecompte">
          </div>
          <div class="form-group">
            <label for="dateouverture">Date Ouverture</label>
            <input type="text" class="form-control" id="dateouverture" name="dateouverture" placeholder="dateouverture">
          </div>
          <input type="submit" class="btn btn-info" value="Enregistrer">
          <input type="reset" class="btn btn-warning" value="Annuler">
        </form>
        </section>
      </div>
    </div>
  
  @elseif($layout == 'showCompte')
    <div class="container-fluid">
      <div class="row">  
        <section class="col">
          @include("compteslist")
        </section>
        <section class="col"></section>
      </div>  
    </div>
  
  @elseif($layout == 'editCompte')
    <div class="container-fluid">
      <div class="row">  
        <section class="col">
          @include("compteslist")
        </section>
        <section class="col">
        <form action="{{url('/updateCompte/'.$compte->id)}}" method="post">
          @csrf
          <div class="form-group">
            <label for="numero">Numero</label>
            <input value="{{$compte->numero}}" type="text" class="form-control" id="numero" name="numero" placeholder="numero">
          </div>
          <div class="form-group">
            <label for="clerib">Clerib</label>
            <input value="{{$compte->clerib}}" type="text" class="form-control" id="clerib" name="clerib" placeholder="clerib">
          </div>
          <div class="form-group">
            <label for="solde">Solde</label>
            <input value="{{$compte->solde}}" type="number" class="form-control" id="solde" name="solde" placeholder="solde">
          </div>
          <div class="form-group">
            <label for="typefrais">Type frais</label>
            <input value="{{$compte->typefrais}}" type="text" class="form-control" id="typefrais" name="typefrais" placeholder="typefrais">
          </div>
          <div class="form-group">
            <label for="typecompte">Type compte</label>
            <input value="{{$compte->typecompte}}" type="text" class="form-control" id="typecompte" name="typecompte" placeholder="typecompte">
          </div>
          <div class="form-group">
            <label for="dateouverture">Date Ouverture</label>
            <input value="{{$compte->dateouverture}}" type="text" class="form-control" id="dateouverture" name="dateouverture" placeholder="dateouverture">
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