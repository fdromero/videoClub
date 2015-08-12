<?php

class Menu
{
    private $opcion;
    private $titulo;
    
    public function __construct($opcion, $titulo)
    {
        $this->opcion = $opcion;
        $this->titulo = $titulo;        
    }
    
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getOpcion()
    {
        return $this->opcion;
    }   
}
?>