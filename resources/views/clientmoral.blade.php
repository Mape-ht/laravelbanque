<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Client Entreprise</title>
  </head>
  <body>
  @include("navbar")

  @if($layout == 'index')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("clientmoralslist")
        </section>
        <section class="col"></section>
      </div>
    </div>

  @elseif($layout == 'create')
    <div class="container-fluid">
      <div class="row">
        <section class="col">
          @include("clientmoralslist")
        </section>
        <section class="col">
        <form action="{{url('/store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="raisonsocial">Raison Social</label>
            <input type="text" class="form-control" id="raisonsocial" name="raisonsocial" placeholder="raisonsocial">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse">
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone">
          </div>
          <input type="submit" class="btn btn-info" value="Enregistrer">
          <input type="reset" class="btn btn-warning" value="Annuler">
        </form>
        </section>
      </div>
    </div>
  
  @elseif($layout == 'show')
    <div class="container-fluid">
      <div class="row">  
        <section class="col">
          @include("clientmoralslist")
        </section>
        <section class="col"></section>
      </div>  
    </div>
  
  @elseif($layout == 'edit')
    <div class="container-fluid">
      <div class="row">  
        <section class="col">
          @include("clientmoralslist")
        </section>
        <section class="col">
        <form action="{{url('/update/'.$clientmoral->id)}}" method="post">
          @csrf
          <div class="form-group">
            <label for="raisonsocial">Raison Social</label>
            <input value="{{$clientmoral->raisonsocial}}" type="text" class="form-control" id="raisonsocial" name="raisonsocial" placeholder="raisonsocial">
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input value="{{$clientmoral->adresse}}" type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse">
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input value="{{$clientmoral->telephone}}" type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone">
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