<?php
  $conection = mysqli_connect("netliinks.com", "netliink_administrator", "@netliink20200#", "netliink_db");
  if ($conection) {
    echo 'si';
  } else {
    echo 'no se ha establecido una conexión segura';
  }
?>