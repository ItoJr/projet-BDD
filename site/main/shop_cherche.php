<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
  <title>Recherche de composant</title>
</head>
<body>
    <!-- Bar de Navigation -->
  <nav class="navbar navbar-expand-md bg-secondary navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="employe_facture.php">Magasin</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="shop.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="shop_cherche.php">Rechercher composant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop_projet.php">Projet</a>
      </li> 
    </ul>
  </div> 
</nav>

<form>
 <div class="container">
   <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="">
    <div class="input-group-append">
      <button class="btn btn-outline-success" type="submit">Rechercher composant</button> 
    </div>
   </div>
  </div>


<div class="container">
  <div class="form-check-inline">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Libelle
    </label>
  </div>
  <div class="form-check-inline">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Nom
    </label>
  </div>
  <div class="form-check-inline">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Marque
    </label>
  </div>
  <div class="form-check-inline">
    <label class="form-check-label">
      <input type="radio" class="form-check-input" name="optradio">Magasin
    </label>
  </div>
  <div class="form-check-inline float-right">
    <a href="#" data-toggle="popover" title="Pour la recherche" data-content="Selectionner un des boutons à gauche pour restreindre votre recherche! Cela facilitera vos critères de recherche..."><strong><em>Informations</em></strong></a>
  </div>
</div>
</form>
<!-- Tableau -->
<div class="container align-items-center" >
  <table class="table table-striped shadow-lg">
    <thead class="thead-dark">
      <tr>
        <th>Libelle</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Marque</th>
        <th>Prix Unitaire</th>
        <th>Magasin</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>CLV1</td>
        <td>Clavier USB pour ordinateur</td>
        <td>Clavier se connectant via cable USB à votre ordinateur qu'il soit fixe ou portable, très performant.</td>
        <td>LOGITECH</td>
        <td>25</td>
        <td>AUCHAN</td>
        <td>
          <input type="checkbox" name="">
        </td>
      </tr>
    </tbody>
  </table>
</div>

<form>
  <div class="container">
    <div class="btn-group">
      <button type="submit" class="btn btn-outline-info">Ajouter dans le panier</button>
    </div>
  </div>
</form>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

</body>
</html>