
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.4.1.min.js"></script>
    <title>Document</title>
</head>
<body>
    <button onclick=" location.href='persistencia/controller.php'">mostrar datos</button>

    <form id=crearcliente method="POST">
      <p>
      Nombre: <input id="nombre" type="text" name="nombre" autofocus required />
      <br />
      Apellido: <input id="apellido" type="text" name="apellido" required />
      <br />
      Telefono: <input id="telefono" type="text" name="telefono" required />
      <br />
      Direccion: <input id="direccion" type="text" name="direccion" required />
      <br />
      Fecha de Nacimiento: <input id="fecha" type="date" name="fechaNacimiento" required />
      <br />
      Ciudad: <input id="ciudad" type="text" name="ciudad" required />
      <br />    
      Tipo de Documento: <input id="tipo" type="text" name="tipoDocumento" required />
      <br />
      Numero de Documento: <input id="dni" type="text" name="numeroDocumento"  required/>
      <br />
      <button id="btnguardar">Registrar</button>
      <input id="seleccion" type="text" name="seleccion" value="1"  style="visibility:hidden"/>
      
      </p>
      </form>

</body>
</html>


<script type="text/javascript">

        $(document).ready(function(){
            $('#btnguardar').click(function(){
             var datos = $('#crearcliente').serialize();
             $.ajax({
                type: "POST",
                url:"persistencia/controller.php",
                data:datos,
                success:function (r){
                  if (r==1){
                    alert("agregado con exito");
                  }else if(r==2){
                    alert("ya existe un cliente con el mismo numero de documento");
                  }else{
                    alert("Fallo la registración");
                  }

                }

              });
              //esto evita que se recargue la pagina
              return false;
            })



        });





</script>


