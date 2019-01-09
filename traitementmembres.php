<?php session_start(); ?>

<?php
require_once 'test.php';

if(isset($_POST['nom']) &&isset($_POST['prenom']) &&isset($_POST['email']) &&isset($_POST['passw'])){

$con=mysqli_connect($host,$username,$password,$dbname);
$nom = mysqli_real_escape_string($con,$_POST['nom']);
$prenom = mysqli_real_escape_string($con,$_POST['prenom']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$passw = mysqli_real_escape_string($con,$_POST['passw']);
$mail=$_SESSION['client'];

$sqlu="SELECT * FROM users WHERE email='$mail'";
$exeu= mysqli_query($con,$sqlu);
if (!mysqli_query($con,$sqlu)) {
  die('Error: ' . mysqli_error($con));
}
$rowu= mysqli_fetch_assoc($exeu);
$nmClient= $rowu['nmClient'];

$sql="UPDATE users set nom='$nom', prenom='$prenom', email='$email', passw='$passw' where nmClient='$nmClient'";

if (mysqli_query($con, $sql)) {
     echo "<script>window.location = 'http://elineda.ovh/My-e-commerce/membre.php'</script>";
   }

   if (!mysqli_query($con,$sql)) {
     die('Error: ' . mysqli_error($con));
   }
}





else {
  echo 'rate';
}





 ?>
