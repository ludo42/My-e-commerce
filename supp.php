<?php session_start(); ?>
<?php
require_once 'test.php';
if (isset($_GET['ido'])&&isset($_GET['idu'])) {
  // code...
  $con=mysqli_connect($host,$username,$password,$dbname);
  $ido = mysqli_real_escape_string($con,$_GET['ido']);
  $idu = mysqli_real_escape_string($con,$_GET['idu']);


  $sqls="DELETE FROM panierProduit WHERE userID='$idu' AND produitID='$ido'";
  if (mysqli_query($con, $sqls)) {
        echo "<script>window.location = 'http://elineda.ovh/My-e-commerce/panier.php'</script>";
     }
  }

  if (!mysqli_query($con,$sqls)) {
    die('Error: ' . mysqli_error($con));
  }



 ?>
