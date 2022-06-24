<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Ejercicio de código

Nuestro equipo de ventas acaba de llegar a un acuerdo con Acme Inc. para convertirse en el proveedor
exclusivo para enrutar sus envíos de productos a través de flotas de camiones de terceros. El problema
es que solo podemos enrutar un envío a un conductor por día.
Cada día recibimos la lista de destinos de envío que están disponibles para ofrecer a los conductores de
nuestra red. Afortunadamente, nuestro equipo de científicos de datos altamente capacitados ha
desarrollado un modelo matemático para determinar qué conductores son los más adecuados para
entregar cada envío.
Con ese arduo trabajo hecho, ahora todo lo que tenemos que hacer es implementar un programa que
asigne cada destino de envío a un conductor determinado mientras maximiza la idoneidad total de todos
los envíos para todos los conductores.
El algoritmo secreto es:

- Si la longitud del nombre de la calle de destino del envío es par, la puntuación básica de
idoneidad (SS) es el número de vocales del nombre del conductor multiplicado por 1,5.
- Si la longitud del nombre de la calle de destino del envío es impar, la base SS es el número de
consonantes en el nombre del conductor multiplicado por 1.
- Si la longitud del nombre de la calle de destino del envío comparte algún factor común (además
de 1) con la longitud del nombre del conductor, el SS aumenta en un 50 % por encima del SS
base.

Escriba una aplicación en el idioma de su elección que asigne destinos de envío a los conductores de
una manera que maximice el SS total sobre el conjunto de conductores. Cada conductor solo puede
tener un envío y cada envío solo se puede ofrecer a un conductor.
El resultado debe ser el SS total y una coincidencia entre los destinos del envío y los conductores. No
necesita preocuparse por la entrada mal formada, pero ciertamente debe manejar nombres en
mayúsculas y minúsculas.


### Marco A Mtz 23/06/2022
 



