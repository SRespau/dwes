<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Credenciales</h1>
    <form name="miformu" action="autoriza.php" method="post"><!--Si ponemos en method "Get" en la url se vera el usuario y contraseña enviados-->
        <p>
            <label for="nombre">Introduce Nombre: </label>
            <input type="text" name="nombreusu" id="nombreusu"><!--Para php necesitaremos el campo name, para JavaScript el campo ID-->
        </p>

        <p>
            <label for="password">Introduce la contraseña: </label>
            <input type="password" name="passwd" id="passwd">
        </p>

        <p>
            <p>Elije tu asignatura preferida</p><!--Al ser php y al poder recoger varios datos tenemos que poner que el name es un array para que pueda recoger todo, sino solo cogería uno-->
            <label for="asignatura1">PHP: </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura1" value="PHP">
            <label for="asignatura2">JavaScript </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura2" value="JavaScript">
            <label for="asignatura3">Python </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura3" value="Python">
            <label for="asignatura4">SQL </label>
            <input type="checkbox" name="asignaturas[]" id="asignatura4" value="SQL">
        </p>

        <p> Elige tu equipo de baloncesto preferido:
            <label for="equipo1">Casademont Zaragoza</label>
            <input type="radio" name="equipo" id="equipo1" value="Casademont Zaragoza" checked>
            <label for="equipo2">San Pablo Burgos</label>
            <input type="radio" name="equipo" id="equipo2" value="Burgos">
            <label for="equipo3">Obradoiro</label>
            <input type="radio" name="equipo" id="equipo3" value="Obradoiro">
        </p>

        <p>Elige tu plato favorito:</p>
        <p>
            <select name="menus" id="menus" required>
                <option value="codillo">Codillo asado</option>
                <option value="ensalada">Ensalada César</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>

        <p>Elige tu platos favorito (Select multiple):</p>
        <p>
            <select name="menusm[]" id="menusm" multiple size="2"><!--Hay que pulsar ctrl para selecciona varios. Checkbox es mas user friendly-->
                <option value="codillo">Codillo asado</option>
                <option value="ensalada">Ensalada César</option>
                <option value="macarrones">Macarrones con tomate</option>
                <option value="brocoli">Brocoli</option>
            </select>
        </p>
        
        <input type="hidden" name="ip" value="<?=$_SERVER['SERVER_ADDR']?>"><!--Hidden lo ocultará del visor de la página, pero si miras el codigo fuente en la página se verá cargado-->
        <!--Se puede insertar codigo php directamente en una etiqueta-->
        <input type="submit" name="envio" id="envio" value="Enviar">
    </form>   
</body>
</html>