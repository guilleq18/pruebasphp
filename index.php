<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 25px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
}

.button:hover {
  background-color: green;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button onclick=" location.href='persistencia/controller.php'">mostrar datos</button>

    <form action="persistencia/controller.php" method="POST">
      <p>
      Nombre: <input type="text" name="nombre" autofocus required />
      <br />
      Apellido: <input type="text" name="apellido" required />
      <br />
      telefono: <input type="text" name="telefono" required />
      <br />
      direccion: <input type="text" name="direccion" required />
      <br />
      fecha de Nacimiento: <input type="date" name="fechaNacimiento" required />
      <br />
      ciudad: <input type="text" name="ciudad" required />
      <br />    
      Tipo de Documento: <input type="text" name="tipoDocumento" required />
      <br />
      Numero de Documento: <input type="text" name="numeroDocumento"  required/>
      <br />
      <input type="submit" value="Submit!" />
      </p>
      </form>




</body>
</html>


