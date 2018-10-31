<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
  <title>Liste employés</title>
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
        <a class="nav-link active" href="gerant_employe.php">Liste employé</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_ventes.php">Liste ventes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gerant_produit.php">Liste produits</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="gerant_client.php">Liste clients</a>
      </li> 
    </ul>
  </div> 
</nav>

<div class="input-group mb-3">
  <input type="date" class="form-control" placeholder="AAAA-MM-DD">
</div>

<div class="container">
  <form>
    <table class="table table-striped shadow-lg">
      <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Sexe</th>
        <th>Numéro Tel</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td>1</td>
        <td>Smith</td>
        <td>John</td>
        <td>Homme</td>
        <td>0682736527</td>
        <td>5 rue de apa</td>
        <td>Paris</td>
        <td>
          <input type="checkbox">
        </td>
        </tr>

        <tr>
        <td>2</td>
        <td>Johnson</td>
        <td>Jolly</td>
        <td>Femme</td>
        <td>0688976527</td>
        <td>2 rue de czonp</td>
        <td>Nantes</td>
        <td>
          <input type="checkbox">
        </td>
        </tr>
      
      </tbody>
    </table>

    <div class="btn-group">
      <a href="gerant_employe_ajout.php"><button type="button" class="btn btn-outline-dark">Ajouter Employé</button></a>
      <button type="submit" class="btn btn-outline-danger">Supprimé Employé</button>
    </div>

  </form>
</div>


</body>
</html>