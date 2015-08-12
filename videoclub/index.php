<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Prueba</title>
</head>
<body>

<?php

include_once('class.videoclub.php');

//Creamos un videoclub
$videoclub= new Videoclub('VideoMax');

//creamos el menu
$menu = new Menu(1, 'Cds');
$menu2 = new Menu(2, 'Juego');
$menu3 = new Menu(3, 'Pelicula');
$menu4 = new Menu(4, 'Clientes');
$menu5 = new Menu(5, 'Alquileres');

//Creamos un nuevo cliente de nombre Francisco
$cliente=new Cliente('Francisco');

//Creamos una nueva pelicula
$pelicula=new Pelicula('El señor de los Anillos','Castellano','3 horas','Fantasía');

//Registramos el cliente y el producto en el videoclub
$videoclub->addMenu($menu);
$videoclub->addMenu($menu2);
$videoclub->addMenu($menu3);
$videoclub->addMenu($menu4);
$videoclub->addMenu($menu5);
$videoclub->addCliente($cliente);
$videoclub->addProducto($pelicula);

//El cliente alquila la pelicula
//$videoclub->alquilar($cliente, $pelicula);

//Obtenemos la lista de clientes registrados
//$clientes = $videoclub->getClientes();

 /* $productos = $videoclub->getProductos();
    echo '<p>Lista de Productos:</p>';
    foreach($productos as $producto)
    {
        echo $producto->getNombre().'<br />';
    }
   */


$menues = $videoclub->getMenues();
echo 'Menu:<br>------------------------------------------<br>';
foreach($menues as $menu)
{
    echo '    ' . $menu->getOpcion() . ' - ' . $menu->getTitulo().'<br>';
}

echo '<br>';
echo '<a href="#" onclick="listarProductos();">Listar Productos</a>'

//Imprimimos la lista de clientes registrados
/*
echo '<p>Lista de Clientes:</p>';
foreach($clientes as $cliente)
{
    echo $cliente->getNombre().'<br />';
}

//Obtenemos la lista de productos registrados
$productos = $videoclub->getProductos();
echo '<p>Lista de Productos:</p>';
foreach($productos as $producto)
{
    echo $producto->getNombre().'<br />';
}
  */
?>

</body>
</html>