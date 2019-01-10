<?php session_start(); ?>


<?php
       /*Inclusion d'un fichier de configuration pour centraliser les informations de connexion*/
       require_once 'test.php';



$con=mysqli_connect($host,$username,$password,$dbname);


$mail=$_SESSION['client'];

$sqlu="SELECT * FROM users WHERE email='$mail'";
$exeu= mysqli_query($con,$sqlu);
if (!mysqli_query($con,$sqlu)) {
  die('Error: ' . mysqli_error($con));
}
$rowu= mysqli_fetch_assoc($exeu);
$nmClient= $rowu['nmClient'];

$sqlt="SELECT * from panierProduit where userId='$nmClient'";
$exet= mysqli_query($con,$sqlt);
if (!mysqli_query($con,$sqlt)) {
	die('Error: ' . mysqli_error($con));
}

while ($rowt = mysqli_fetch_assoc($exet)) {
  // code...
  $idc=$rowt['userId'];
  $idp=$rowt['produitID'];
  $sqld="INSERT INTO achat (nmclient, idproduit) VALUES ('$idc','$idp')";
  if (mysqli_query($con, $sqld)) {
    $sqld="DELETE FROM panierProduit WHERE userId='$idc' AND produitID='$idp'";
    if (mysqli_query($con, $sqld)) {
          echo "<script>window.location = 'http://elineda.ovh/My-e-commerce'</script>";
            }
  }
          }




        ?>
