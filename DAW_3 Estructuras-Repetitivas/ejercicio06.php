<?php

# Ejercicio 06
$numeroIngresado = (int) $_POST["numeroIngresado"];

# Creación del array lista
$listaDeNumeros = [];

# Creación de la cantidad de números pares e impares
$cantidadDeNumerosPares = 0;
$cantidadDeNumerosImpares = 0;

# (string) Lista de números
$listaDeNumerosString = "";

# Guardar los números generados aleatorios en la lista
for ($i = 0; $i < $numeroIngresado; $i++):
    $numeroAleatorio = rand(1, $numeroIngresado); # rand(número mínimo, número máximo)
    $listaDeNumeros[] = $numeroAleatorio; # Guardar en lista de números
endfor;

# Verificar si es par o impar
foreach ($listaDeNumeros as $numero):
    if ($numero % 2 == 0) {
        $cantidadDeNumerosPares++;
    } else {
        $cantidadDeNumerosImpares++;
    }
endforeach;

# Creando la lista de números generados
foreach ($listaDeNumeros as $numero):
    $listaDeNumerosString .= " $numero";
endforeach;

# Mostrar en pantalla
echo "<h1>Resultado</h1>";
echo "<p><b>Número ingresado:</b> $numeroIngresado</p>";
echo "<p><b>Lista de números generados aleatoriamente:</b> $listaDeNumerosString</p>";
echo "<p><b>Números pares:</b> $cantidadDeNumerosPares</p>";
echo "<p><b>Números impares:</b> $cantidadDeNumerosImpares</p>";
