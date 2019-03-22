<!DOCTYPE html>
<html>
<head>
    <title>CONSULTA</title>
</head>
<body>

<div class="container">
        <table id="datos generales" class="table table-bordered">
                <thead style="background-color: #054bba; text-align:center; color:white">
                    <tr>
                    <th colspan="3">Bitacora de Accesos</th>
                    </tr>
                </thead>
                
                <tr>
                    <th>Fecha y Hora:</th>
                    <th>Estudiante:</th>
                    <th>Matricula:</th>
                </tr>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "domotica";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT fecha,nombre_completo, matricula FROM students,logs WHERE students.id = logs.id_student ORDER BY logs.id DESC";
            $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_array($result)) {
                        $id = $row[0];
                        $matricula = $row[1];
                        $nombre = $row[2];
                        echo <<<HTML
                            <tr>
                                <td colspan=1>$id</td>
                                <td>$matricula</td>
                                <td>$nombre</td>
                            </tr>                 
HTML;

                }
            } else {
                echo "0 results";
            }
        ?>
    </table>
    </div>
    <div class="container"align="center">
            <button class="btn btn-success"  onclick="myFunction()">Imprimir</button>
            <button class="btn btn-secondary" onclick="location.href='domotica.html'">Volver a Inicio</button>
    </div>
   
    </body>

    <script>
        function myFunction() {
            window.print();
        }
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</html>
        