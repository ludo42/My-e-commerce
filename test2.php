<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Design Tech Académie</title>
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
                   ORDER BY nmProduit
                   limit 10';

               $q = $conn->query($sql);
               $q->setFetchMode(PDO::FETCH_ASSOC);

           }

           /*Si erreur ou exception, interception du message*/
            catch (PDOException $pe) {
               die("Could not connect to the database $dbname :" . $pe->getMessage());
           }


       ?>

       <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>nb produit</th>
                        <th>nom</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>photo</th>
                        <th>taille</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['nbProduit']) ?></td>
                            <td><?php echo htmlspecialchars($row['nom']); ?></td>
                            <td><?php echo htmlspecialchars($row['description']); ?></td>
                            <td><?php echo htmlspecialchars($row['prix']); ?></td>
                            <td><?php echo htmlspecialchars($row['photo']); ?></td>
                            <td><?php echo htmlspecialchars($row['taille']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>



    <header>
    </header>
    <main>


    </main>
    <footer>

    </footer>



<script src="script.js" type="text/javascript"></script>
  </body>
</html>
