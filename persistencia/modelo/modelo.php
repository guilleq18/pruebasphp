<?php
error_reporting(0);
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

    public function agregarCliente($registros){
      
            //code...
           // SET NOCOUNT ON;
        $sql="
            

            DECLARE @nombre nvarchar(25)='".$registros['nombre']."';
            DECLARE @apellido nvarchar(25)='".$registros['apellido']."';
            DECLARE @telefono nvarchar(15)='".$registros['telefono']."';
            DECLARE @direccion nvarchar(15)='".$registros['direccion']."';
            DECLARE @fechaNacimiento date='".$registros['fechaNacimiento']."';
            DECLARE @ciudad nvarchar(30)='".$registros['ciudad']."';
            DECLARE @tipoDocumento nvarchar(15)='".$registros['tipoDocumento']."';
            DECLARE @numeroDocumento nvarchar(15)='".$registros['numeroDocumento']."';

            

            INSERT INTO dbo.clientes (nombre, apellido, telefono, direccion, fechaNacimiento, ciudad, tipoDocumento, numeroDocumento) VALUES(@nombre, @apellido, @telefono, @direccion, @fechaNacimiento, @ciudad, @tipoDocumento, @numeroDocumento);";
            
          
       $datos = $this->gestorBD->hacerInsert($sql);
        //return $datos;
     }
     
}
