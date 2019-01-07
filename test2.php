<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Design Tech Académie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
       /*Inclusion d'un fichier de configuration pour centraliser les informations de connexion*/
       require_once 'test.php';

       /*Essai de connexion en créant on objet connexion avec les informations de la BDD*/
       try {
               $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
               echo "Connected to $dbname at $host successfully.";


               $sql = 'SELECT nbProduit, nom, description, prix, photo, taille
                   FROM produit
                   ORDER BY nbProduit
                   limit 10';

               $q = $conn->query($sql);
               $q->setFetchMode(PDO::FETCH_ASSOC);

           }

           /*Si erreur ou exception, interception du message*/
            catch (PDOException $pe) {
               die("Could not connect to the database $dbname :" . $pe->getMessage());
           }


       ?>

       

    <header>
    </header>
    <main>
      <div class="container">

  <div class="card-columns">
<?php while ($row = $q->fetch()): ?>

        <div class="card move">
            <img class="card-img-top" src="<?php echo htmlspecialchars($row['photo']); ?>" alt="Card image cap">
            <div class="card-body cat">
                <h5 class="card-title"><?php echo htmlspecialchars($row['nbProduit']) ?><</h5>
                <p class="card-text"><?php echo htmlspecialchars($row['description']); ?><br>Taille : <?php echo htmlspecialchars($row['taille']); ?><br><?php echo htmlspecialchars($row['prix']); ?> €</p>
                <a class="btn btn-outline-primary" href="description.html" role="button">Description</a>
                <a class="btn btn-outline-warning" href="panier.html" role="button">Panier</a>
            </div>
        </div>

          <?php endwhile; ?>

          </div>

        </div>

    </main>
    <footer>

    </footer>



<script src="script.js" type="text/javascript"></script>
  </body>
</html>
