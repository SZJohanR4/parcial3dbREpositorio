<DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" href="css/estiloConsola.css" rel="stylesheet">

            <title>Procedimiento Almacenado</title>
        </head>
        <body>
            <div id="contenido">
                <div id="consola">

                    <div id="consolaOut">
                        <p>
                            <?php
                            echo"1.lista puntos valorados<br>";
                            echo"2.lista de usuarios que han valorado<br>";
                            echo"3.lista de usuarios que no ha valorado<br>";
                            echo"4.lista de puntos con sus respectivos usuarios<br>";
                            echo"5.lista de usuarios que califiquen mejor sus puntos valorados<br>";
                            echo"6.lista de puntos valorados por el usuario/<br>";
                            echo"7.lista de puntos con un IB dado/<br>";
                            echo"";
                            echo"";
                            echo"";
                            ?>                                                                          
                        </p>
                        <!--aquui se muestra el resultado de la consulta-->
                        <p>
                            <?php
                            $result = unserialize($_GET['resultado']);
                            echo $result[0];
                            ?>
                        </p>

                    </div>




                </div>

                <div id="entrada">
                    <form method="POST" action="control.php" enctype="multipart/form-data">
                        <textarea id="entradaI" name="entradaI" placeholder="Digite un comando" required=""></textarea>                      


                        <input type="submit" name="buscar" value="Buscar" id="buscar" class="boton">
                    </form>



                </div>
            </div>
        </body>
    </html>
