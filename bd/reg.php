<?php
include('conect.php');

// Datos extraidos del Formulario que se guardaran en variables
$name = $_POST['nombre'];
$lastname = $_POST['apellidos'];
$username = $_POST['usuario'];
$pass = $_POST['pass'];
$date = $_POST['fecha'];
$sex = $_POST['sexo'];

// Conectamos con servidor de Base de datos y lanzamos error si no se puede conectar
$conect = mysqli_connect($server,$user);
if (!$conect)
{
    echo'Error al conectar la base de datos';
}
// Seleccionamos la Base de Datos dentro del servidor anteriormente conectado
mysqli_select_db($conect,$bd);

// Guardamos variable con sentencia SQL para guardar en Base de Datos
$sql = "INSERT INTO registro  VALUE (NULL,'$name', '$lastname','$username','$pass','$date','$sex')";
$query = mysqli_query($conect,$sql);

// Mensaje si da error al guardar y si todo ok redirecciona a ok.php
if (!$query)
{
    echo'Error';
}else{
    header('Location: ok.php');
}
