<?php

require_once('db.php');
class Modelo {
    //variable en donde guardo los datos de la conexion
    private $gestorBD;

    public function __construct() {
        //instancio los datos de la conexion en la variable gestorBD
        $this->gestorBD = new db;
    }
    //metodo que realiza la consulta de clientes
    public function traerCliente()
    {
        $sql = "SELECT * FROM clientes";
        //instancio en datos la consulta que se envia al metodo hacerConsulta que me devuelve los datos a mostrar
        $datos = $this->gestorBD->hacerConsulta($sql);
        //retorno la variable datos para poder ser utilizada posteriormente al ser llamado el metodo
		return $datos;
    }

}