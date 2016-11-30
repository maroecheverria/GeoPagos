MODELADO DE CLASES
==================

Desarrollar una clase con algún framework PHP, que permita la creación de objetos que representen figuras geométricas dadas (cuadrado, triangulo, círculo) proveyendo un parámetro de entrada único que identifiqué el tipo de objeto esperado como retorno. Tip de ayuda: **“Factory”**.

La estructura del modelo de clases que deben tener las implementaciones de dichas figuras geométricas será la siguiente: 
 * Se debe definir una interfaz que exija la definición de métodos que permitan la obtención de los datos: superficie; base; altura; diámetro; tipo de figura geométrica. 
 * Puede definirse alguna clase intermedia (no instanciable) para reducir la redundancia de código. 
 * Cada una de sus concreciones debe, ante la invocación de alguno de sus métodos, retornar el valor correspondiente o null en caso de que la figura geométrica correspondiente no posea dicha característica. 

En caso de conocer la notación se valorará el diseño de su diagrama UML.

**Framework: Symfony Standard Edition 3.2**

To run the Symfony application please follow these steps:

 * ```-git clone https://github.com/maroecheverria/GeoPagos.git```
 
 * ```composer install```
 
 * browse to the project directory and execute this command ```$ php bin/console server:run```
 
 * open your browser and access [http://localhost:8000/shapes](http://localhost:8000/shapes)
 
 **Enjoy!**



