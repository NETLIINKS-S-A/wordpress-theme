<?php
include('conection.php');

if (isset($_POST['register'])) {
  if(strlen($_POST['correo']) >= 1) {
    $correo = trim($_POST['correo']);
    $registeredData = date('d/m/y');

    $consult = "INSERT INTO registeredUsers (email, regDay) VALUES ('$correo', '$registeredData')";
    $result = mysqli_query($conection, $consult);

    if ($result) {
      ?>
          <div class="modal__container"></div>
      <?php
    } else {
        ?>
        <h3>Upps!! ha ocurrido un error</h3>
        <?php
    }
  }
}
?>