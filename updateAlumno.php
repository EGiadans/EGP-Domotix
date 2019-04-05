<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "domotica";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$idHuella = $_POST['txtHue'];
$mat = $_POST['txtMatricula'];
$nombre = $_POST['txtName'];
$idCred  = $_POST['txtCred'];

$sql = "UPDATE students 
        SET id_cred = '$idCred',
            matricula = '$mat',
            nombre_completo = '$nombre'
        WHERE id = $idHuella
        ";
//$sql = "UPDATE students SET id_cred = $idCred, matricula = '$mat', nombre_completo = '$nombre' WHERE id = $idHuella";

if ($conn->query($sql) === TRUE) {
    header('Location: domotica.html');
    /*
    echo <<<HTML
    <div class="container">
    <h2>Alumno registrado correctamente</h2>
    <button class="btn btn-primary" onclick="location.href='domotica.html'">Volver a Inicio</button>
</div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
HTML;*/
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>