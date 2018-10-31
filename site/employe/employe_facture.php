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
        <a class="nav-link" href="employe_newfacture.php">Créer facture</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="employe_newclient.php">Créer client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="employe_facture.php">Liste factures</a>
      </li> 
    </ul>
  </div> 
</nav>
<!-- -->

<!-- -->

<div class="container">
  <table class="table shadow-lg">
    <thead class="thead-light">
      <tr>
        <th>Date</th>
        <th>ID Client</th>
        <th>Libelle Produit</th>
        <th>Quantité</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2018-10-03</td>
        <td>1</td>
        <td>CLV1</td>
        <td>2</td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>