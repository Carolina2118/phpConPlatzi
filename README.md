# php Con Platzi
Curso Práctico de PHP de platzi.

Trabajamos con el pensamiento logico para poder comensar a creas.
## como partimo?
- Primero tenemos que el problema.
- Identificamos las entradas.
- Identificamos las salidas.
- Definimos el proceso.

## Herramientas para entrenar tu pensamiento lógico.
- Plataformas de retos online.
- Diagramas de flujo.
- Escribir el paso a paso de varias formas.
- Resolver ejercicios matematicos.

![Captura de pantalla de 2023-02-08 18-54-40](https://user-images.githubusercontent.com/67702555/219143355-a4f13884-df2d-4edc-a55c-4d9f506d2969.png)

### Para comenzaren nuestro editor de texto tenemos que abrir con etiquetas 

![Captura de pantalla de 2023-02-15 17-37-05](https://user-images.githubusercontent.com/67702555/219149536-e806ae57-2fe3-4142-9ccb-50c073a96796.png)

## Operadores lógicos.

Son conectores que se utilizan mucho, nos permitiría conectar 2 o más valores para identificarlos si su valor es Positivo o Negativo para darle un sentido lógico a los prenunciados que estemos desarrollando de acuerdo al caso.

![Captura de pantalla de 2023-02-15 17-45-00](https://user-images.githubusercontent.com/67702555/219173326-bb02f88c-afad-4796-b2e9-e27ca4f56a55.png)


## Estructura de control.

Son herramientas que nos provee nuestro lenguaje para que podamos hacer validaciones,interacciones y demás actividades de acuerda a la necesidad en nuestros proyectos para nuestro códigos. 

![Captura de pantalla de 2023-02-17 19-29-26](https://user-images.githubusercontent.com/67702555/219811339-fa293e41-145d-4237-9c85-93b2cd689af1.png)

   # If / Else.
 
- Esta estructura de control nos ayuda a validar si sucede alguna condición para que una acción se pueda ejecutar y en caso de que esa validación sea falso o que no se cumpla entonces se va a ejecutar otra acción.

  # While / Do-While

 - Estructura que se tratan como un siglo porque ejecuta una acción mientras una condición sucede.
 - El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, tanto como la expresión while se evalúe como true. El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración (cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración). A veces, si la expresión while se evalúa como false desde el principio, las sentencias anidadas no se ejecutarán ni siquiera una vez. 

 - Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada al final de cada iteración en lugar que al principio. La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un bucle do-while (la expresión verdadera sólo es verificada al final de la iteración), mientras que no necesariamente va a correr con un bucle while regular (la expresión verdadera es verificada al principio de cada iteración, si se evalúa como false justo desde el comienzo, la ejecución del bucle terminaría inmediatamente).
 
  # for / foach.

 -  Los bucles for son los más complejos en PHP. Se comportan como sus homólogos en C. La sintaxis de un bucle for es:

for (expr1; expr2; expr3)
    sentencia

La primera expresión (expr1) es evaluada (ejecutada) una vez incondicionalmente al comienzo del bucle.
En el comienzo de cada iteración, se evalúa expr2. Si se evalúa como true, el bucle continúa y se ejecutan la/sy sentencia/s anidada/s. Si se evalúa como false, finaliza la ejecución del bucle.
Al final de cada iteración, se evalúa (ejecuta) expr3.
Cada una de las expresiones puede estar vacía o contener múltiples expresiones separadas por comas. En expr2, todas las expresiones separadas por una coma son evaluadas, pero el resultado se toma de la última parte. Que expr2 esté vacía significa que el bucle debería ser corrido indefinidamente (PHP implícitamente lo considera como true, como en C). Esto puede no ser tan inútil como se pudiera pensar, ya que muchas veces se debe terminar el bucle usando una sentencia condicional break en lugar de utilizar la expresión verdadera del for. 

-  El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada. Existen dos sintaxis:

foreach (expresión_array as $valor)
    sentencias
foreach (expresión_array as $clave => $valor)
    sentencias

La primera forma recorre el array dado por expresión_array. En cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array avanza una posición (así en la próxima iteración se estará observando el siguiente elemento).
La segunda forma además asigna la clave del elemento actual a la variable $clave en cada iteración.
 
 
