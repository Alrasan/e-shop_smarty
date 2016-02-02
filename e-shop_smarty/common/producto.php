<?php

/**
 * Description of producto
 *
 * @author Fran Lapuente (lapuentebermejofran@gmail.com)
 */
class producto {
    
    private $nombre;
    private $precio;
    private $cantidad;
    
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = 1;
    }
    
    public function addCant(){
        $this->cantidad+=1;
        $this->precio = $this->precio*$this->cantidad;
    }
    
    public function getProd(){
        $prod = ['nombre'=>  $this->nombre, 'precio'=>$this->precio, 'cantidad'=>$this->cantidad];
        return $prod;
    }
    
    public function getPrice(){
        return $this->precio;
    }
    
}
