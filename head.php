<?php
    /* EVITAR EL CACHE EN LOS ARCHIVOS */
    $v = random_int(1, 999999);

    $pagina = basename($_SERVER['PHP_SELF']);
	$js_pagina = str_replace('.php', '', $pagina);
	$js_pagina = url()."/js/pages/$js_pagina.js?v=$v";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso al Sistema - <?php echo $company->empresa;?></title>
    <!-- Jquery -->
    <script src="<?php echo url();?>js/plugins/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <link rel="stylesheet" href="<?php echo url();?>vendor/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo url();?>vendor/popper/popper.min.js"></script>
    <script src="<?php echo url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo url();?>vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- BootstrapTable -->
    <link rel="stylesheet" href="<?php echo url();?>vendor/bootstrap-table/bootstrap-table.css">
    <script src="<?php echo url();?>vendor/bootstrap-table/bootstrap-table.js"></script>
    <script src="<?php echo url();?>vendor/bootstrap-table/extensions/export/bootstrap-table-export.js"></script>
    <script src="<?php echo url();?>vendor/bootstrap-table/extensions/export/tableExport.js"></script>
    <script src="<?php echo url();?>vendor/bootstrap-table/locale/bootstrap-table-es-CL.min.js"></script>
    <script src="<?php echo url();?>vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
    <!-- BootstrapTable CustomView -->
    <script src="<?php echo url();?>vendor/bootstrap-table/extensions/custom-view/bootstrap-table-custom-view.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo url();?>images/icon/favicon.png" />
    <!-- Icono de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo url();?>vendor/fontawesome-free/css/all.min.css">
    <!-- Normalize -->
    <link rel="stylesheet" href="<?php echo url();?>css/normalize.css">
    <!-- Estilos custom -->
    <link rel="stylesheet" href="<?php echo url();?>css/custom.css">
</head>