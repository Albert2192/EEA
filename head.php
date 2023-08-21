<?php
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
    <script src="js/plugins/jquery/jquery-3.2.1.min.js"></script>
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