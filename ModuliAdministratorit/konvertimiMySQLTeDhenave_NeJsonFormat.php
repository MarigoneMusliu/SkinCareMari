<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="wscm";
$lidhe = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Nuk mund të lidhet me databazën.");
$query = "SELECT EDhena FROM wscm_edhenaadm";
$rezultati = mysqli_query($lidhe, $query);
if(!$rezultati){ echo "Nuk mund te ekzekutohet në query"; die();}
else{
 $data = array();
  while($rreshti = mysqli_fetch_assoc($rezultati)){
    $data[]=$rreshti;
  }
$fp = fopen('wscm.json', 'w');
fwrite($fp, json_encode($data, JSON_PRETTY_PRINT));
echo "Fajlli eshte krijuar";
//close the file
fclose($fp);
}
?>