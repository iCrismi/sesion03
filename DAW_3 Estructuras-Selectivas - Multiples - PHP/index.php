<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>
            1. Realizar una aplicación web que recibe como parámetro el número de una semana y 
            devuelve el día al que pertenece. 
        </p>
        <form action="ejercicio1.php" method="post">
            <fieldset>
                <label>Ingrese un numero del día de la semana: </label><br>
                <input type="text" name="txtDia" required><br>

                <input type="submit" value="Enviar" name="Btnenviar"><br>
                <input type="reset" value="Cancelar" name="btnCancelar"><br>
            </fieldset>
        </form>

        <p>
            2. Realizar una aplicación web que recibe como parámetro el número de un mes y 
            devuelve el trimestre al que pertenece. 
        </p>
        <form action="ejercicio2.php" method="post">
            <fieldset>
                <label>Ingrese un numero del mes: </label><br>
                <input type="text" name="txtMes" required><br>

                <input type="submit" value="Enviar" name="Btnenviar"><br>
                <input type="reset" value="Cancelar" name="btnCancelar"><br>
            </fieldset>
        </form>
        <p>
            Realizar una aplicación web que lea un número entero entre 1 y 10. Si el número es 
            menor que 1 o mayor que 10 el programa debe escribir en pantalla un mensaje de error 
            y en caso de que sea válido debe mostrar en pantalla el número romano que lo 
            representa. 
        </p>
        <form action="ejercicio3.php" method="post">
            <fieldset>
                <label>Ingrese un numero entre el 1 y el 10: </label><br>
                <input type="text" name="txtNum" required><br>

                <input type="submit" value="Enviar" name="Btnenviar"><br>
                <input type="reset" value="Cancelar" name="btnCancelar"><br>
            </fieldset>
        </form>

        <p>
            4. Una tienda dedicada a la venta de equipos y suministros para PC desea premiar a sus 
            clientes que realizan una compra superior o igual a S/. 1000.00 con el sorteo de premios 
            según el valor de una bolilla que tiene un número grabado entre 1 y 5 (este número 
            debe obtenerse de forma aleatoria). Los premios se dan bajo la siguiente tabla:  
            # bolilla     PREMIO 
            1              Mouse 
            2             Teclado 
            3            Cámara Web 
            4            Parlantes 
            5            Memoria USB 
            Tener en cuenta que los premios son del 1 al 5. 
        </p>
        <form action="ejercicio4.php" method="post">
            <fieldset>
                <label>Ingrese el costo de la compra realizada: </label><br>
                <input type="text" name="txtcompra" required><br>

                <input type="submit" value="Enviar" name="Btnenviar"><br>
                <input type="reset" value="Cancelar" name="btnCancelar"><br>
            </fieldset>
        </form>

        <p>
            Determine el importe a pagar para el examen de admisión de una universidad, cuyo 
            valor depende del nivel socioeconómico y el colegio de procedencia. 
            Colegio 
            Nivel Social           A    B     C
            Nacional              300  200   100

            Particular            400  300   200
        </p>
        <form action="ejercicio5.php" method="post">
            <fieldset>
                <label for="Nivel">Nivel socioeconómico</label>
                <select name="Nivel" id="Nivel">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                <br><br>
                <label for="Colegio">Colegio de procedencia</label>
                <select name="Colegio" id="Colegio">
                    <option value="N">Nacional</option>
                    <option value="P">Particular</option>
                </select>
                <br><br>
                <input type="submit" value="Buscar">
                <input type="reset" value="Limpiar">
            </fieldset>
        </form>
        <p>
            Al ingresar el día y el numero de un mes, devolver la estación del año de acuerdo a la 
            siguiente tabla:
            Estación Tiempo
            Verano Del 21 de Diciembre al 20 de Marzo
            Otoño Del 21 de Marzo al 21 de Junio
            Invierno Del 22 de Junio al 22 de Setiembre
            Primavera Del 23 de Setiembre al 20 de Diciembre
        </p>
        <form action="ejercicio6.php" method="post">
            <fieldset>
                <label>Día</label>
                <input type="text" name="Dia">
                <label>Mes (Número)</label>
                <input type="text" name="Mes">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <p>
            Programa que permita el ingreso del día 
            y mes de nacimiento, indique a que signo 
            zodiacal que corresponde según la imagen
        </p>
        <form action="ejercicio7.php" method="post">
            <fieldset>
                <label>Día</label>
                <input type="text" name="Dia">
                <label>Mes (Número)</label>
                <input type="text" name="Mes">
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
    </body>

</html>
