<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	</style>
</head>
<body>
    
    <?php foreach ($destacados->result() as $producto):?>
    <p><?= $producto->nombre ?></p>
    <img src="<?= $producto->imagen ?>" height="100" width="100">
    <p><?= $producto->precio_venta ?>€</p>
    <p><?= $producto->descripcion ?></p>
    <?php endforeach;?>
    
</body>
</html>


