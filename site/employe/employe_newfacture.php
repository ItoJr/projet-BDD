<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
	<title></title>
</head>
<body>

	<!-- Bar de Navigation -->
	<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="employe_facture.php"><b>Employé</b></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="employe_newfacture.php">Créer facture</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="employe_newclient.php">Créer client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="employe_facture.php">Liste factures</a>
      </li> 
    </ul>
  </div> 
</nav>

<form>
    <!-- Date achat -->
    <div class="form-group row">
          <div class="col-10">
          <input class="form-control" type="date" placeholder ="AAAA-MM-DD" id="example-text-input" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
          </div>
    </div>

    <!-- Email du client -->
    <div class="form-group row">
          <div class="col-10">
          <input class="form-control" type="text" placeholder ="Email Client" id="example-text-input">
          </div>
    </div>

    <!-- Libelle du produit -->
   <div class="form-group row">
          <div class="col-sm-10">
            <select name="cars" class="custom-select custom-select mb-3">
            <option selected>Liste des produits</option>
            <option value="CLV1">CLV1 - Clavier sans fil</option>
            <option value="SRS1">SRS1 - Souris sans fil</option>
          </div>
    </div>

    <!-- Quantité -->
    <div class="form-group row">
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" placeholder="Quantité">
          </div>
    </div>        


    <!-- envoyer -->
    <button type="submit" class="btn btn-primary">Envoyer</button>

  </form>

</body>
</html>