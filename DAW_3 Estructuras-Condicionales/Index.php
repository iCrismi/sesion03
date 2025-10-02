<html>
    <head>
        <body>
            <h1>Ejercicios 01</h1>    
            <p>
                Elabore un programa que permita calcular el descuento según el valor de la compra 
de un cliente. Si la compra es igual o mayor a S/. 1000.00 se le otorgará el descuento 
del 10%. Mostrar el valor inicial, el descuento y el total neto a pagar.
            </p>
            <form action="Ejercicio01.php" method="post">
    <fieldset>
        <label>Valor de la compra</label>
                <input type="text" name="Compra" >
                <input type="submit" value="Calcular">
                <input type="reset" value="Limpiar">
    </fieldset>
            </form>
            <h1>Ejercicios 02</h1> 
    <p>
         Que pida tres números e indicar si el tercero es igual a la suma del primero y el 
segundo
    </p>
    <form action="Ejercicio02.php" method="post">
        <fieldset>
        <label>Primer número</label>
                <input type="text" name="Num1" >
        <label>Segundo número</label>
                <input type="text" name="Num2" >
        <label>Tercer número</label>
                <input type="text" name="Num3" >
                <input type="submit" value="Calcular">
                <input type="reset" value="Limpiar">
    </fieldset> 
    </form>
    <h1>Ejercicios 03</h1> 
   <p>
    Elabore un programa que acepte un número del año mayor a 2000 y muestre 
"PRESENTE" si el número es el año actual, "PASADO" si es menor o "FUTURO" si es 
mayor, en razón al año actual.
   </p>
    <form action="Ejercicio03.php" method="post">
        <fieldset>
        <label>Año</label>
        <input type="text" name="Año">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </fieldset> 
    </form>
    <h1>Ejercicios 04</h1> 
    <p>Elabore un programa que solicite el nombre y la edad de 2 hermanos. Realice la 
comparación de las edades y muestre un mensaje indicando el nombre del hermano 
mayor y cuantos años de diferencia tiene con el menor</p>
<form action="Ejercicio04.php" method="post">
    <fieldset>
        <label>Nombre del primer hermano</label>
        <input type="text" name="Nom1">
        <label>Edad del primer hermano</label>
        <input type="text" name="Edad1">
        <br>
        <label>Nombre del segundo hermano</label>
        <input type="text" name="Nom2">
        <label>Edad del segundo hermano</label>
        <input type="text" name="Edad2">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </fieldset>
</form>
<h1>Ejercicios 05</h1> 
<p>
    Leer un número entero positivo e identificar si es de un dígito, dos dígitos, tres dígitos 
o más de tres dígitos
</p>
<form action="Ejercicio05.php" method="post">
    <fieldset>
        <label>Número entero positivo</label>
        <input type="text" name="Num">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </fieldset>
</form>
<h1>Ejercicios 06</h1> 
<p>
    Elabore un programa que permita determinar la temperatura corporal de una persona, 
según la medida de un termómetro.
a. > 39º Fiebre Alta: Diríjase al Centro de Salud más cercano
b. 37º - 38º Fiebre: Tómese una pastilla y repose
c. 35º - 36º Temperatura Normal
d. 35 Temperatura muy baja: Tómese algo calient
</p>
<form action="Ejercicio06.php" method="post">
    <fieldset>
        <label>Temperatura corporal (°C)</label>
        <input type="text" name="Temp">
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </fieldset> 
</form>
<h1>Ejercicios 07</h1>
        <p>
            El NIF (o letra asociada a un DNI) se obtiene de la siguiente manera:
• Se divide el número de DNI entre 23 y el resto es codificado por una letra según la 
siguiente tabla de equivalencias:
• Escribe un programa que pida el DNI y ofrezca como resultado letra asociada.
• Ejemplo: para el DNI 56321122 el NIF es ‘X
        </p>
        <form action="Ejercicio07.php" method="post">
    <fieldset>
                <label>DNI</label>
                <input type="text" name="DNI">
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </fieldset>
        </form>
        <h1>Ejercicios 08</h1>
    <p>
          Determine el importe a pagar para el examen de admisión de una universidad, cuyo 
valor depende del nivel socioeconómico y el colegio de procedencia.
Nivel Social
Colegio A B C
[N]acional 300.00 200.00 100.00
[P]articular 400.00 300.00 200.00
    </p> 
       <form action="Ejercicio08.php" method="post">
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
<h1>Ejercicios 09</h1> 
<p>
    Al ingresar el día y el numero de un mes, devolver la estación del año de acuerdo a la 
siguiente tabla:
Estación Tiempo
Verano Del 21 de Diciembre al 20 de Marzo
Otoño Del 21 de Marzo al 21 de Junio
Invierno Del 22 de Junio al 22 de Setiembre
Primavera Del 23 de Setiembre al 20 de Diciembr
</p>
<form action="Ejercicio09.php" method="post">
    <fieldset>
        <label>Día</label>
        <input type="text" name="Dia">
        <label>Mes (Número)</label>
        <input type="text" name="Mes">
        <input type="submit" value="Enviar">
    </fieldset>
</form>
<h1>Ejercicios 10</h1> 
<p>
    Programa que permita el ingreso del día 
y mes de nacimiento, indique a que signo 
zodiacal que corresponde según la imagen
</p>
<form action="Ejercicio10.php" method="post">
    <fieldset>
        <label>Día</label>
        <input type="text" name="Dia">
        <label>Mes (Número)</label>
        <input type="text" name="Mes">
        <input type="submit" value="Enviar">
    </fieldset>
</form>
        </body>
  
    </head>
</html>