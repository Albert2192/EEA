<?php
require 'inc/funciones.php';
session_start();
if (isset($_SESSION['session'])) {
    $user = verificarUser($_SESSION['session']);
    $user_img = $user->photo ? url()."images/users/".$user->photo : url()."images/users/0_no_image.png";
}
/* DATOS DE LA COMPAÑIA */
$company = verificarEmpresa();
/* var_dump($company); */

/* INCLUYE LA CABECERA */
include "head.php";
?>
<body>
    <?php
    if (isset($_SESSION['session'])) {
        include "principal.php";
    } else {
        include "login.php";
    }
    ?>
</body>

</html>