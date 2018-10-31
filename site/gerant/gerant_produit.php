<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
	<title>Produits</title>
</head>
<body>
	<!-- Bar de Navigation -->
	<nav class="navbar navbar-expand-md bg-danger navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="gerant_employe.php"><b>Gérant</b></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="gerant_employe.php">Liste employé</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_ventes.php">Liste ventes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="gerant_produit.php">Liste produits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_client.php">Liste clients</a>
      </li>  
    </ul>
  </div> 
</nav>

<form action="" method="">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Libelle/Nom/Description/Marque/Prix" id="input">
  </div>


  <div class="container">
    <table class="table table-striped shadow-lg">
      <thead class="thead-dark">
        <tr>
        <th>Libelle</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Marque</th>
        <th>Prix Unitaire</th>
        <th></th>
        </tr>
      </thead>
      <tbody id="table">
        <tr>
        <td>CLV1</td>
        <td>Clavier USB pour ordinateur</td>
        <td>Clavier se connectant via cable USB à votre ordinateur qu'il soit fixe ou portable, très performant.</td>
        <td>LOGITECH</td>
        <td>25</td>
        <td>
          <input type="checkbox" name="">
        </td>
        </tr>

        <tr>
        <td>SRIS1</td>
        <td>Souris USB pour ordinateur</td>
        <td>Souris se connectant via cable USB à votre ordinateur qu'il soit fixe ou portable, performant et avec plein de boutons pour les gameurs.</td>
        <td>HP</td>
        <td>10</td>
        <td>
          <input type="checkbox" name="">
        </td>
        </tr>
      
      </tbody>
    </table>
  </div>


  <div class="container">
    <div class="btn-group">
      <button type="submit" class="btn btn-outline-info">Modifier Produit</button>
      <button type="submit" class="btn btn-outline-danger">Supprimer Produit</button>

      <a href="gerant_produit_ajout.php"><button type="button" class="btn btn-outline-dark">Ajouter Produit</button></a>
    </div>
  </div>
</form>

<!-- Pour la recherche de client -->
<script>
$(document).ready(function(){
  $("#input").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>