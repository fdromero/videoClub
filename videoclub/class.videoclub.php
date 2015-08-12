<?php

include_once('class.cliente.php');
include_once('class.producto.php');
include_once('class.pelicula.php');
include_once('class.cd.php');
include_once('class.juego.php');
include_once('class.menu.php');

class Videoclub
{

    private $nombre;
    private $menues;
    private $productos;
    private $clientes;

    public function __construct($nombre)
    {
        $this->nombre=$nombre;
        $this->menues=array();
        $this->productos=array();
        $this->clientes=array();
    }

    public function addMenu($menu)
    {
        $this->menues[]=$menu;
    }

    public function getMenues()
    {
        return $this->menues;
    }
    
    public function addProducto($producto)
    {
        $this->productos[]=$producto;
    }

    public function getProductos()
    {
        return $this->productos;
    }

    public function addCliente($cliente)
    {
        $this->clientes[]=$cliente;
    }

    public function getClientes()
    {
        return $this->clientes;
    }

    public function alquilar($cliente,$producto)
    {
        $cliente->alquilarProducto($producto);
    }

}
?>