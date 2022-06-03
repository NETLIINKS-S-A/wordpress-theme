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
        <div class="modal__container" id="modal">
          <div class="modal__window">
            <h1 class="modal__title">Precio</h1>
            <h1 class="modal__price hero">$50
              <small>mensuales</small>
            </h1>
            <p class="modal__content">
              
            </p>
            <div class="input__group">
              <button class="btn btn__success">Contratar</button>
              <button class="btn btn__info" id="closeModal">Cerrar</button>
            </div>
          </div>
        </div>
        
      <?php
    } else {
        ?>
        <h3>Upps!! ha ocurrido un error</h3>
        <?php
    }
  }
}
?>