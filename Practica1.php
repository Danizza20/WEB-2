<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1</title>
    <link rel="stylesheet" href="Practica estilos.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script:wght@400..700&family=Shadows+Into+Light&display=swap" rel="stylesheet">


</head>
<body background="Fondo-brilloso.jpg" 
style="background-repeat: no-repeat; background-size: 150%; background-attachment: fixed;"></body>
         <form method="post" action="Formulario.php">
            <style> 
                table,th,td{ 
                    align-items: center;
               }
               </style>

               <h1 align="center">Formulario</h1>
              
               <fieldset>
                <legend>Información general</legend>
              <table>
                <tr>
                    <td><label for="nombre">Nombre:</label><br/>
                    <input type="text" placeholder="Nombre" maxlength="12" name="nombre" id="nombre"/><br/></td>

                    <td><label for="paterno">Apellido paterno:</label><br/>
                    <input type="text" placeholder="Apellido paterno" maxlength="12" name="paterno" id="paterno"/><br/></td>

                    <td><label for="materno">Apellido materno:</label><br/>
                    <input type="text" placeholder="Apellido materno" maxlength="12" name="materno" id="materno"/><br/></td>
                </tr>

                <tr>
                    <td><label for="usuario">Nombre de usuario:</label><br/>
                    <input type="text" placeholder="Usuario" maxlength="12" name="usuario" id="usuario"/><br/></td>

                    <td><label for="password">Contraseña:</label><br/>
                    <input type="text" placeholder="Password" maxlength="12" name="password" id="password"/><br/>

                    <td><label for="fechan">Fecha de nacimiento:</label><br/>
                    <input type="date" name="fechan" id="fechan"><br/></td>
                </td>      
                </tr>
            </table>
            </fieldset>

            <fieldset>
                <legend>Datos de facturación</legend>
              <table>
                <tr>
                    <td><label for="pais" align="left">País</label><br>
                        <select size="3" multiple>
                                <option>México</option>
                                <option>Canadá</option> 
                                <option>E.U.A</option>
                                <option>Chile</option>
                                <option>Argentina</option>
                                <option>Colombia</option>
                                <option>Brazil</option>
                                <option>Venezuela</option>
                                <option>Ecuador</option>
                                <option>Costa Rica</option>
                        </select></td>

                    <td><label for="ciudad" align="left">Ciudad</label><br>
                        <select size="3" multiple>
                                <option>San Luis Potosí</option>
                                <option>Cancún</option> 
                                <option>Monterrey</option>
                                <option>Guadalajara</option>
                                <option>Veracruz</option>
                                <option>Tijuana</option>
                                <option>Guanajuato</option>
                                <option>Tampico</option>
                                <option>Hermosillo</option>
                                <option>Mazatlán</option>
                        </select></td>

                    <td><label for="calle">Calle:</label><br/>
                    <input type="text" placeholder="Usuario" maxlength="12" name="calle" id="calle"/><br/></td>
                </tr>

                    <td><label for="numero">Número de casa:</label><br/>
                    <input type="text" placeholder="Num Exterior" maxlength="12" name="numero" id="numero"/><br/></td>

                    <td><label for="col">Colonia:</label><br/>
                    <input type="text" placeholder="Colonia" maxlength="12" name="col" id="col"/><br/></td>

                    <td><label for="mail">E-mail:</label><br/>
                    <input type="text" placeholder="E-mail" maxlength="12" name="mail" id="mail"/><br/></td>
                </tr>

                <tr>
                    <td><label for="rfc">RFC:</label><br/>
                    <input type="text" placeholder="RFC" maxlength="12" name="rfc" id="rfc"/><br/></td>

                    <td><label for="codigo">Código Postal:</label><br/>
                    <input type="text" placeholder="C.P" maxlength="12" name="codigo" id="codigo"/><br/></td>

                    <td><input type="submit" name="enviar" id="enviar" value="Enviar"/>
                    <input type="reset" name="borrar" id="borrar" value="Restablecer"/></td>
                </tr>

            </table>
            </fieldset>
        </form>
</body>
</html>