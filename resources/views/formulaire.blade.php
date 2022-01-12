<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Demo</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
		 <link rel="manifest" href="manifest.json">
	

            <!-- Fallback application metadata for legacy browsers -->
            <meta name="application-name" content="Assistance">
            <link rel="icon" sizes="16x16 32x32 48x48" href="icon.png">
            <link rel="icon" sizes="512x512" href="icon2.png">


</head>
<body>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div><img src="" class="ent" style="width: 50px; "></div>
			  <div class="container-fluid">
				    <a class="btn btn-outline" href="index.php">Demo Test</a>
						    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						      <span class="navbar-toggler-icon"></span>
						    </button>

				    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				      
				      
				    </div>
			  </div>
	</nav>


	<form class="" method="POST" action="probleme.php">

		<div class="container">
     		<div class="row">

				<article class="form">

				
					<p>

						<label for="nom">Nom* :</label>		

						 <input class="form-control" type="text" name="nom" id="nom" placeholder="Ex: Pierre" size="30" maxlength="30" data-bs-toggle="tooltip" data-bs-placement="top" title="Renseignez le nom sans espace ni caracteres speciaux" style="height: 50px" autofocus required />
					</p>


					<p>
						<label for="prenom">Prénom* :</label>
						 <input class="form-control" type="text" name="prenom" id="prenom" placeholder="EX: Michel" size="30" maxlength="30" data-bs-toggle="tooltip" data-bs-placement="top" title="Renseignez le prénom sans espace ni caracteres speciaux" style="height: 50px" required/>
					</p>

					<p>
						<label for="salle">Salle* :</label>
						 <input class="form-control" type="text" name="salle" id="salle" placeholder="Ex: salle 1" size="30" maxlength="30" style="height: 50px" required />
					</p>

					<p>
					
					<label for="e_mail">Votre email* :</label>

  						<input class="form-control" type="email" id="e_mail" name="e_mail" placeholder="votre-email@contact.com" required size="30" maxlength="100" style="height: 50px" />
  					
  					</p>

					<p>
						<label for="probleme">Votre message* :</label>
						 <textarea class="form-control" name="probleme" id="probleme"  rows="10" cols="50" required></textarea>
					</p>


					<p>

			   	    <input class="btn btn-outline-dark" type="submit"id="soumettre" value="Soumettre"  />
			      </p>

			      <p>
			   	    <input class="btn btn-outline-dark" type="button" onclick="window.location.href = 'views/index.blade.php';" value="Retour" />
			      </p>

			    </article>

	    	</div>
    	</div>

	 

      


</body>
</html>