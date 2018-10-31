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
        			<a class="nav-link active" href="employe_newclient.php">Créer client</a>
      			</li>
      			<li class="nav-item">
       				<a class="nav-link" href="employe_facture.php">Liste factures</a>
      			</li> 
    		</ul>
  		</div> 
	</nav>

	<h1 class="text-center font-weight-light">Remplir le formulaire :</h1>

	<form>
		<!-- nom -->
		<div class="form-group row">
  				<div class="col-10">
    			<input class="form-control" type="text" placeholder ="Nom" id="example-text-input">
  				</div>
		</div>

		<!-- prenom -->
		<div class="form-group row">
  				<div class="col-10">
    			<input class="form-control" type="text" placeholder ="Prenom" id="example-text-input">
  				</div>
		</div>

		<!-- email -->
		<div class="form-group row">
			
      		<div class="col-sm-10">
        		<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      		</div>
    	</div>

    	<!-- sexe -->
    	<div class="form-group row">
    		
			<select class="custom-select">
  				<option selected>Selectionner sexe</option>
  				<option value="H">Homme</option>
  				<option value="F">Femme</option>
			</select>
		</div>

		<!-- adresse -->
		<div class="form-group">
    		<label for="exampleTextarea">Adresse</label>
   			<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  		</div>

		<!-- telephone -->
		<div class="form-group row">
  				<div class="col-10">
    			<input class="form-control" type="text" placeholder ="Telephone" id="example-text-input">
  				</div>
		</div>


		<!-- envoyer -->
		<button type="submit" class="btn btn-primary">Envoyer</button>

	</form>
</body>
</html>