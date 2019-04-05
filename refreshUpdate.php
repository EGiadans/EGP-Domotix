<!DOCTYPE html>

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

            $id = $_POST['txtBuscar'];

            $sql = "SELECT * FROM students WHERE id = '$id' ";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);

        ?>


<html>
    <head>
        <title>Registro de ingresos</title>
        <style type="text/css">
            body{
                font-family: Arial, sans-serif;
            }
            /* Formatting search box */
            .search-box{
                width: 200px;
                position: relative;
                display: inline-block;
                font-size: 14px;
            }
            .search-box input[type="text"]{
                height: 32px;
                padding: 5px 10px;
                border: 1px solid #CCCCCC;
                font-size: 14px;
            }
            .result{
                position: absolute;        
                z-index: 999;
                top: 100%;
                left: 0;
            }
            .search-box input[type="text"], .result{
                width: 100%;
                box-sizing: border-box;
            }
            /* Formatting result items */
            .result p{
                margin: 0;
                padding: 7px 10px;
                border: 1px solid #CCCCCC;
                border-top: none;
                cursor: pointer;
            }
            .result p:hover{
                background: #f2f2f2;
            }
            .btn-secondary {
                
            }
        </style>

        
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.search-box input[type="text"]').on("keyup input", function(){
                    /* Get input value on change */
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(".result");
                    if(inputVal.length){
                        $.get("backend-search.php", {term: inputVal}).done(function(data){
                            // Display the returned data in browser
                            resultDropdown.html(data);
                        });
                    } else{
                        resultDropdown.empty();
                    }
                });
                
                // Set search input value on click of result item
                $(document).on("click", ".result p", function(){
                    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                    $(this).parent(".result").empty();
                });
            });
            </script>

    </head>
    
    <body>
        <div class="jumbotron text-center">
            <h1>EGP DOMOTIX</h1>
            <p>Sistema de Automatizacion y Domotica</p> 
        </div>

        <div class="container"  style="align-items:center;">       
            <div class="col-sm-3" style="text-align:center;">
            </div>
            
            <div class="row">    
                <div class="col-sm-6" style="text-align:center;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Modificar registros</h2>
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-6">
                                <form action="refreshUpdate.php" method="POST">
                                    <div class="search-box">
                                            <input type="text" autocomplete="off" placeholder="Id del estudiante..." name="busca" />
                                            <div class="result"></div>
                                    </div>

                                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    
                                    <button class="btn btn-primary">Consultar datos</button>
                                </form>
                            </div>
                            
                            <div class="col-sm-6">
                                    <form action="updateAlumno.php" method="POST">
                                            Id Estudiante: <input name="txtHue" type="text" value="<?php echo $row[0]; ?>">
                                            <br><br>
                                            Nombre del alumno: <input name="txtName" type="text" value="<?php echo $row[2]; ?>" >
                                            <br><br>
                                            Matricula: <input name="txtMatricula" type="text" value="<?php echo $row[1]; ?>" >
                                            <br><br>
                                            Id credencial: <input name="txtCred" type="text" value="<?php echo $row[3]; ?>" >
                                            <br><br>
                                            <button class="btn btn-primary">Actualizar                                     
                                    </form>
                                    <button class="btn btn-secondary" onclick="location.href='domotica.html'">Volver a Inicio</button>

                            </div>
                        </div>
                    </div>    
                </div>
            </div>

            <div class="col-sm-3" style="text-align:center;"> 
            </div>
        </div>
    
    </body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</html>


<?php
    //Mostrar la misma vista que update Student
    //pero con los textboxes llenos, una vez teniendo los datos llenos
    //ejecutar el updateAlumno.php
?>