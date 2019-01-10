<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Ecommerce projet</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
       /*Inclusion d'un fichier de configuration pour centraliser les informations de connexion*/
       require_once 'test.php';


       ?>


    <div class="container-fluid">
			<header class="col-lg-12 col-md-12 col-12">
					<div class="top-bar col-lg-12 col-md-12 col-12">
							<a class="logo-bar" href="index.php">(Owl Art)</a>
							<?php if (isset($_SESSION['co'])): ?><?php if ($_SESSION['co']==1): ?><a href="membre.php"><button type="button" class="btn col-lg-1 col-md-2 col-2 offset-lg-5 btn-success">Mon compte</button></a>
									<a class="logo-bar" href="deco.php"><button type="button" class="btn btn-primary col-lg-2 col-md-3 col-4" data-toggle="modal">
										Deconnexion
								</button></a><?php endif; ?>
							<?php endif; ?>
							<?php if (!isset($_SESSION['co'])||$_SESSION['co']==0): ?>

							 <button type="button" class="btn btn-primary col-lg-2 col-md-3 col-4" data-toggle="modal" data-target="#exampleModal">
									Connexion
							</button>
							<button type="button" class="btn btn-primary col-lg-2 col-md-3 col-4" data-toggle="modal" data-target="#inscription">
									Inscription
							</button><?php endif; ?>
							<a class="col-lg-2 col-md-4 col-1 panier" href="panier.php">
									<img src="030-shopping-bag.png">Panier
							</a>
					</div>

					<div class="nav color border col-md-12 col-12 col-lg-12">
							<div class="logo">
									<img src="chouette.png">
									<h3>(Owl Art)</h3>
							</div>
							<div class="voir col-md-12 col-12 col-lg-12">
									<a>Home</a>
									<a>Nouveautés</a>
									<a>Oeuvres</a>
									<a href="filtre.html">Peinture</a>
									<a>Sculpture</a>
									<a>Photographie</a>
									<a>Dessin</a>
									<a>Artistes</a>
							</div>
					</div>
			</header>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
							<div class="modal-content">
									<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
									</div>
									<div class="modal-body">

											<form method="post" action="connexion.php">
													<div class="form-group">
															<h3>Bienvenue chez (Owl Art) inscrivez vous ou bien connectez vous !</h3>
															<label for="exampleInputEmail1">Adresse email</label>
															<input type="email" class="form-control" id="connectMail" name="connectMail" aria-describedby="emailHelp" placeholder="Entrez votre email">
															<small id="emailHelp" class="form-text text-muted">Nous n'echangerons pas vos email</small>
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Mot de passe</label>
															<input type="password" class="form-control" id="connectMDP" name="connectMDP" placeholder="Mot de passe">
													</div>
													<button type="submit" class="btn btn-primary">Se connecter</button>
											</form>


									</div>
							</div>
					</div>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
							<div class="modal-content">
									<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
											</button>
									</div>
									<div class="modal-body">

											<form method="post" action="trait/inscription.php">
													<div class="form-group">
															<h3>Bienvenue chez (Owl Art) inscrivez vous!</h3>
															<label for="exampleInputEmail1">Adresse email</label>
															<input type="email" class="form-control" id="inscriMail" name="inscriMail" aria-describedby="emailHelp" placeholder="Entrez votre email">
															<small id="emailHelp" class="form-text text-muted">Nous n'echangerons pas vos email</small>
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Nom</label>
														<input type="text" class="form-control" id="inscriNom" name="inscriNom">
													</div>
													<div class="form-group">
														<label for="recipient-name" class="col-form-label">Prenom</label>
														<input type="text" class="form-control" id="inscriPrenom" name="inscriPrenom">
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Mot de passe</label>
															<input type="password" class="form-control" id="inscriPass" name="inscriPass" placeholder="Mot de passe">
													</div>
													<div class="form-group">
															<label for="exampleInputPassword1">Répeter le mot de passe</label>
															<input type="password" class="form-control" id="inscriVerif" name="inscriVerif" placeholder="Mot de passe">
													</div>
													<button type="submit" class="btn btn-primary">S'inscrire</button>
											</form>


									</div>
							</div>
					</div>
			</div>




        <main>
          <div class="container-fluid">

            <?php


$con=mysqli_connect($host,$username,$password,$dbname);


            if (isset($_GET['item'])) {
              // code...






// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$id = mysqli_real_escape_string($con,$_GET['item']);


$sql="SELECT * FROM produit WHERE nbproduit='$id'";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$prix=$row['prix'];

if (isset($_SESSION['co'])){
	if ($_SESSION['co']==1){
		$mail=$_SESSION['client'];

		$sqlu="SELECT * FROM users WHERE email='$mail'";
		$exeu= mysqli_query($con,$sqlu);
		if (!mysqli_query($con,$sqlu)) {
		  die('Error: ' . mysqli_error($con));
		}
		$rowu= mysqli_fetch_assoc($exeu);
		$nmClient= $rowu['nmClient'];
		$sqld="INSERT INTO panierProduit VALUES ('$nmClient','$id','$prix')";
		if (mysqli_query($con, $sqld)) {
               echo '<div style="margin: 0 auto; margin-top:1em;" class="alert alert-secondary" role="alert">
  Produit ajouté au panier
</div>';
            }


	}
}
else {
	echo "<div> vous n'êtes pas connecté</div>";
}}?>
<?php if (!isset($_SESSION['co'])||$_SESSION['co']==0): ?>

<div>Connectez vous pour acceder au panier</div>
<?php endif; ?>

	<?php
	if (isset($_SESSION['co'])){
		if ($_SESSION['co']==1){

$mail=$_SESSION['client'];

$sqlu="SELECT * FROM users WHERE email='$mail'";
$exeu= mysqli_query($con,$sqlu);
if (!mysqli_query($con,$sqlu)) {
	die('Error: ' . mysqli_error($con));
}
$rowu= mysqli_fetch_assoc($exeu);
$nmClient= $rowu['nmClient'];

$sqlt="SELECT * FROM produit WHERE nbProduit IN ( SELECT produitID from panierProduit where userID='$nmClient')";
$exet= mysqli_query($con,$sqlt);
if (!mysqli_query($con,$sqlt)) {
	die('Error: ' . mysqli_error($con));
}

$sqlq="SELECT SUM(prix) prix FROM panierProduit WHERE userID='$nmClient'";
$exeq= mysqli_query($con,$sqlq);
if (!mysqli_query($con,$sqlq)) {
	die('Error: ' . mysqli_error($con));
}
$rowq= mysqli_fetch_assoc($exeq);



}}?>

	<h1>Panier</h1>
<?php if (isset($_SESSION['co'])): ?><?php if ($_SESSION['co']==1): ?><div class="container">
<table class="table table-bordered table-condensed">
									<tbody>
                    <?php while ($rowt = mysqli_fetch_assoc($exet)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($rowt['nom']);$nproduit=$rowt['nbProduit'];

														$sqlf="SELECT COUNT(produitID) cont FROM panierProduit WHERE userId='$nmClient' AND produitID='$nproduit'";
														$exef= mysqli_query($con,$sqlf);
														if (!mysqli_query($con,$sqlf)) {
															die('Error: ' . mysqli_error($con));
														}
														$rowf= mysqli_fetch_assoc($exef);



														?></td>
                            <td><?php echo htmlspecialchars($rowt['prix']); ?> €</td>
														<td><?php echo htmlspecialchars($rowf['cont']); ?></td>
														<td><a style="margin-left: 33%;" href="supp.php?ido=<?php echo $nproduit?>&idu=<?php echo $nmClient?> "><button type="button" class="btn btn-danger">supprimer</button></a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

						<div style="margin-left: 62.5%;"><div class="alert alert-success" role="alert">
  Total : <?php echo htmlspecialchars($rowq['prix']);?> €
</div></div>
<div style="margin-left: 45%; margin-top:1em;"><a href="achat.php"><button type="button" class="btn btn-secondary">Payer</button></a>

</div>
</div>
					<?php endif; ?>
					<?php endif; ?>





            </div>
</main>



<?php mysqli_close($con);?>

        <footer class="page-footer font-small unique-color-dark">

            <div class="fond">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">RESTEZ CONNECTE AVEC NOUS SUR LES RESEAUX SOCIAUX !</h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <!-- Facebook -->
                            <a class="ic">
                                <img src="facebook.png">
                            </a>
                            <!-- Twitter -->
                            <a class="ic">
                                <img src="twitter.png">
                            </a>
                            <!-- Google +-->
                            <a class="ic">
                                <img src="pinterest.png">
                            </a>
                            <!--Linkedin -->
                            <a class="ic">
                                <img src="deviantart.png">
                            </a>
                            <!--Instagram-->
                            <a class="ic">
                                <img src="flickr.png">
                            </a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row-->

                </div>
            </div>

            <!-- Footer Links -->
            <div class="container fond2 text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">(Owl Art)</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p style="justify-content: center;">À travers notre plateforme, nous vous donnons accès au plus vaste catalogue d’oeuvres d’art contemporain, <strong>(Owl Art)</strong> rassemble des oeuvres d’artistes mondialement reconnus et de jeunes talents sur tous les supports.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Catégories</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Art abstrait</a>
                        </p>
                        <p>
                            <a href="#!">Contemporain</a>
                        </p>
                        <p>
                            <a href="#!">Tableau</a>
                        </p>
                        <p>
                            <a href="#!">Objet design</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Mon compte</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Mes commandes</a>
                        </p>
                        <p>
                            <a href="#!">Mes informations</a>
                        </p>
                        <p>
                            <a href="#!">Mes réductions</a>
                        </p>
                        <p>
                            <a href="#!">Mes adresses</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-home mr-3"></i>Saint-Etienne 42, Telecom, FR</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> owlART@entreprise.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> Design Tech Academy</a>
            </div>
            <!-- Copyright -->

        </footer>

        <div class="container logo-pied">
            <div class="row">
                <img src="chouette.png">
            </div>
        </div>
        <!-- Footer -->


    </div>

</body>

<script type="text/javascript" src="main.js"></script>

</html>
