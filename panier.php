<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container-fluid">
	<header class="col-lg-12 col-md-12 col-12">
		<div class="top-bar col-lg-12 col-md-12 col-12">
      <a class="logo-bar" href="index.html">(Owl Art)</a>
      <a class="btn btn-info col-lg-1 col-md-2 col-2 offset-lg-6" href="membre.html" role="button">Connexion</a>
      <a class="btn btn-success col-lg-1 col-md-2 col-2" href="membre.html" role="button">Inscription</a>
      <a class="col-lg-2 panier" href="panier.html">
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
			<a>Peinture</a>
			<a>Sculpture</a>
			<a>Photographie</a>
      <a>Dessin</a>
      <a>Artistes</a>
    </div>
		</div>
	</header>


	

    




<div class="container col-md-8 col-lg-8 col-12">
	<div class="titre">

	<H1>Votre panier</H1>
</div>
	<table id="cart" class="col-lg-12 col-md-12 col-12 table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Produit</th>
							<th style="width:10%">Prix</th>
							<th style="width:8%">Quantité</th>
							<th style="width:22%" class="text-center">Sous-total</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="bag col-sm-2 hidden-xs">
										<img src="visage.jpg" alt="panier" class="img-responsive"/>
									</div>
								</div>
										
							</td>
							<td data-th="Price">€1999.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">1999.99</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1999.99</strong></td>
							<div class="text-produit">
							<h4><strong>Votre Produit</strong></h4>
							<p>Tableau du grand Maitre reconnu mondialement Belghit Sofiane</p>
							</div>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuer vos achats</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total €1999.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Finaliser<i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>


<!-- Footer -->
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
</html>