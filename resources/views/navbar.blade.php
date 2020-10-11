<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Banque du Peuple</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <a class="nav-link" href="{{url('/')}}">Accueil <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="{{url('/create')}}">Créer Client Entreprise </a>
        <a class="nav-link" href="{{url('/createClientphysique')}}">Créer Client Particulier </a>
        <a class="nav-link" href="{{url('/createCompte')}}">Créer Compte </a>
    </div>
</nav>