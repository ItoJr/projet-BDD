<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
	<title>Accueil</title>
</head>
<body>
		<!-- Bar de Navigation -->
	<nav class="navbar navbar-expand-md bg-secondary navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="shop.php">Magasin</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="shop.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop_cherche.php">Rechercher composant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop_projet.php">Projet</a>
      </li>
    
    </ul>
  </div> 
</nav>
<!-------------------------------------------------------->

<div class="container">
  <select name="cars" class="custom-select custom-select-lg mb-3">
    <option selected>Liste des magasins</option>
    <option value="volvo">Carrefour</option>
    <option value="volvo">Auchan</option>
    <option value="volvo">Boulanger</option>
    
  </select>
</div>
<!-------------------------------------------------------->
<div class="container">
  <div class="alert alert-dark">
    <h1><span class="badge badge-dark text-white">Auchan</span></h1>
  <h4><b>Ville:</b> Paris</h4>
  <h4><b>Adresse:</b> 5 place Leclerc</h4>
  <h4><b>Numéro de téléphone:</b> 0189089827</h4>
</div>
</div>
<!-------------------------------------------------------->
<div class="container align-items-center" >
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
    <tbody>
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
        <td>CLV1</td>
        <td>Clavier USB pour ordinateur</td>
        <td>Clavier se connectant via cable USB à votre ordinateur qu'il soit fixe ou portable, très performant.</td>
        <td>LOGITECH</td>
        <td>25</td>
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
<!-------------------------------------------------------->

</body>
</html>