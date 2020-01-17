<?php 

//LUCIANO CARLOS SUPPA

/**
 * =====================================
 * 1 - Cuanto vale $a en los tres casos:
 * =====================================
 */
//a
$a = 10;
function ej1_a() {
  $a = 11;
}
ej1_a();
//cuanto vale a?

/**
 * =====================================
 * RESPUESTA - $a vale : 10;
 * =====================================
*/

//b
$b = 10;
function ej1_b() {
  global $b;
  $b = 11;
}
ej1_b();
//cuanto vale b?

/**
 * =====================================
 * RESPUESTA - $b vale : 11;
 * =====================================
*/

//c
$c = 10;
function ej1_c() {
  $c = 11;
  global $c;
}
ej1_c();
//cuanto vale c?

/**
 * =====================================
 * RESPUESTA - $c vale : 10;
 * =====================================
*/

//d
$d = 10;
function ej1_d() {
  global $d;
  $d = 11;
}
//cuanto vale d?

/**
 * =====================================
 * RESPUESTA - $d vale : 10;
 * =====================================
*/

//e
$e = 11;
function ej1_e1() {
  ej1_e2();
  $e = 12;
}
function ej1_e2() {
  global $e;
}
ej1_e1();
//cuanto vale $e?

/**
 * =====================================
 * RESPUESTA - $e vale : 11;
 * =====================================
*/

/**
 * =====================================
 * 2 - imprimir secuencias con bucles
 * =====================================
 */
//a - Escribir un bucle for y un while donde se
//    imprimen solo los valores impares desde 0 a 20

/**
 * =====================================
 * RESPUESTA:
 */

for ($i=1;$i<20;$i+=2)
{
    echo $i . ' - ';
}

echo "\n\n";

$i = 1;
while ($i<20)
{
    echo $i . ' - ';
    $i+=2;
}

/**
 * =====================================
*/

//b - Igual al punto a pero en orden inverso salteando de a uno
//    (imprime la mitad de numeros)

/**
 * =====================================
 * RESPUESTA:
 */

for ($i=19;$i>=0;$i-=4)
{
    echo $i . ' - ';
}

echo "\n\n";

$i = 19;
while ($i>=0)
{
    echo $i . ' - ';
    $i-=4;
}

/**
 * =====================================
*/

//c - Crear un arreglo de 10 elementos y recorrerlo
//    con un foreach en ambos sentidos
//    (hint: puede usar funciones de array antes de entrar al foreach)

/**
 * =====================================
 * RESPUESTA:
 */
$ar = array (0,1,2,3,4,5,6,7,8,9);

foreach ($ar as $value)
{
  var_dump ($value);
}

echo "\n\n";

rsort ($ar);
foreach ($ar as $value)
{
  var_dump ($value);
}

/**
 * =====================================
*/

//d - Crear un arreglo de 10 elementos y recorrerlo de ambos sentidos
//    con un for y un while

/**
 * =====================================
 * RESPUESTA:
 * 
 */

$ar = array (0,1,2,3,4,5,6,7,8,9);

for ($i=0;$i<=9;$i++)
{
  var_dump ($ar[$i]);
}

echo "\n";

for ($i=9;$i>=0;$i--)
{
  var_dump ($ar[$i]);
}

echo "\n";

$i=0;

while ($i<=9)
{
    var_dump ($ar[$i]);
    $i++;
}

echo "\n";

$i=9;

while ($i>=0)
{
    var_dump ($ar[$i]);
    $i--;
}

/**
 * 
 * =====================================
*/


/**
 * =====================================
 * 3 - Arreglos
 * =====================================
 */
//a - Crear un arreglo de una dimensión de mil elementos
//    con claves consecutivas

/**
 * =====================================
 * RESPUESTA:
 */

$ar = array_fill (0 , 999 , 0 );

var_dump($ar);

/**
 * =====================================
*/

//b - Crea un arreglo de 100elementos con claves numericas pero pares
//    Ej: $a[0], $a[2], $a[3] deben existir, $a[1], $a[3] no deben existir

/**
 * =====================================
 * RESPUESTA:
 */

$ar = array ();
$ar = array_fill_keys (range(0,199,2), 0 );
var_dump ($ar);

/**
 * =====================================
*/

//c - Si nos pasan un arreglo y no sabemos el contenido, cual suele ser la mejor
//    forma de recorrerlo? Se puede de más formas?

/**
 * =====================================
 * RESPUESTA:
 */

// La mejor manera de recorrer un array es utilizando un foreach, también se podría utilizar un for o un while pero,
// al desconocer cuantos valores tiene, no sería lo mas apropiado. Otra manera es utilizando array_values que nos va 
// a devolver todos los valores de un array, o sino también count nos va a contar todos los elementos que tenga un array.

/**
 * =====================================
*/

/**
 * =====================================
 * 4 - funciones
 * =====================================
 */
//a - Crear una funcion que dado un arreglo/array duplica todos los valores

/** 
*   $ar = arary();
*   function ej4_a($arreglo) {
*   codigo
*   }
*   ej4_a($ar); // tiene que modificar todos los valores y duplicarlos
*/

/**
 * =====================================
 * RESPUESTA:
 */

$ar = array(2,4,6);
function ej4_a($ar) {
  global $ar;
  foreach ($ar as $value)
  {
    $value = $value * 2;
    echo ($value) . "\n";
  }
}
ej4_a($ar);

/**
 * =====================================
*/


//b - Crea una funcion que dado un arreglo/array te devuelve un nuevo arreglo
//    con los valores duplicados pero no modifica el original (debe crear un
//    nuevo arreglo)

/**
 * =====================================
 * RESPUESTA:
 */

$ar = array (10,20,30);

function dupli($ar) {
  global $ar;
  $br = array_pad ($ar, 3 , 0);
  foreach ($br as $key => $value)
  {
  $value = $br[$key]  * 2;
  echo ($value) . "\n";
  }
}
dupli($ar);

/**
 * =====================================
*/

//c - De un ejemplo de función recursiva

function suma(int $n){
    if ($n==0)
      return 0;
    else
      return $n + suma($n+1);
  }

//d - En este psuedo codigo, puede decirme si anda si lo programaramos en PHP?
//    Que devuelve? Que estamos calculando?
/**
 * 
*
*f1( $var1 ) {
*  if $var1 > 1{
    return $var1 * f2($var1 - 1)
  }
  return $var1
}
f2( $var2 ) {
  if $var2 > 1{
    return $var2 * f1($var2 - 1)
  }
  return $var2
}
f1(5) // cuanto devuelve?
      // que esta calculando?
*/

/**
 * =====================================
 * RESPUESTA:
 */

function f1($var1)
{
  if ($var1 > 1) {
    return $var1 * f1($var1 - 1);
  }
  return $var1;
}
function f2($var2)
{
  if ($var2 > 1){
    return $var2 * f2($var2 - 1);
  }
  return $var2;
}
echo f1(5); 

/**
 * De esta manera andaria bien, devuelve 120
 * =====================================
*/

/**
 * =====================================
 * 5 - A desarrollar
 * =====================================
 */
//a - Arregle el siguiente codigo
$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $v) {
  echo $v . "\n";
}
echo "\n\n";
// duplico todos los elementos sin agregar nuevos
foreach ($b as $v) {
  $b[$v] = $v*2;
}

/**
 * =====================================
 * RESPUESTA:
 */

$a = array(1,2,3);
$b = array(4,5,6);
echo "Las keys del arreglo a son: \n";
foreach ($a as $k=>$v) {
  echo $k . "\n";
}
echo "\n";

// duplico todos los elementos sin agregar nuevos
foreach ($b as $k=>$v) {
  $b[$k] = $v*2;
  echo $b[$k] . "\n";
}

echo "\n\n\n";

/**
 * =====================================
*/

//b - Plantee la idea de juego truco donde dado una mano
//    de 3 cartas te diga cuantos tantos tiene para el envido
//    (Vamos a asumir que todas las cartas son del mismo palo, por ej oro)
//
//    ej:
//       $mano = array(4, 5, 10);    // 4 de oro, 5 de oro, 10 de oro
//                                   // tiene 29
//
//       $mano = array(1, 11, 12);  // tiene 1
//
//       $mano = array(6, 7, 5);    // tiene 33

/**
 * =====================================
 * RESPUESTA:
 */

do {
    do{
  $a = rand (1,12);
  $b = rand (1,12);
  $c = rand (1,12);
  } while ($a == 8 || $a == 9 or $b == 8 || $b == 9 or $c == 8 || $c == 9);
  } while ($a == $b || $b == $c);
  $r = 20;
  $ar = array ($a,$b,$c);
  sort ($ar);
  var_dump ($ar);
  
  for($i=0;$i<3;$i++)
  {
    if ($ar[$i] <= 9 and $i>0 && $i<3)
    {
        $r = $r + $ar[$i];
    }
  }
  echo 'Tiene : ' . ($r) . ' de envido.';

/**
 * =====================================
*/

//c - Programemos el juego "Casi Escoba de 15"
//    En el juego se reparten 2 cartas en el "medio" y tenes una
//    mano de 2 cartas. Nuevamente el palo de las cartas no nos importa.
//    El mazo va a constar de 48 cartas (sin comodines) de numeros y sin
//    palo.
//    Las reglas son, se sacan 2 cartas al medio y luego se sacan 2 cartas
//    para el jugador. Con dichas cartas tenemos que ver cuantas veces tenemos
//    una escoba de 15, con cada carta de la mano. Por cada escoba sumamos un punto.
//    En la segunda vuelva, volvemos a sacar 2cartas al medio y 2 para el jugador
//    y volvemos a ver cuantas escobas tenemos y sumamos un punto por cada una
function generarMazo() {
  //devolver el mazo de 48 cartas
}
function mezclarCartas($mazo) {
  //dado el mazo, hay que mezclarla, puede usar functiones de php sobre arrays
}
function dameCartasDelMedio($mazo) {
  // esta funcion toma un mazo y saca 2 cartas del mazo
  // IMPORTANTE! Deben desaparecer del mazo dichas cartas
  // Para esto puede crear un nuevo mazo sin las cartas o eliminar las cartas
  // del mazo. Puede usar funciones de arrays para eliminar dichas cartas o sacarlas
}
function dameCartasJugador($mazo) {
  //Dada el mazo, saca 2 cartas para el jugador (estas deben desaparecer del mazo)
}
function cuantasEscobas($manoDelMedio, $manoJugador) {
  // dado las cartas del medio nos fijamos cuantas escobas tiene y devolvemos
  // el numero de escobas.
  // ej:
  //     medio: 7 7
  //     mano: 1 5
  //     resultado: 1 punto por tener 7 + 7 + 1
  //
  //     medio: 7 5
  //     medio: 3 3
  //     resultado: 2 puntos, 7 + 5 + 3 y 7 + 5 + 3
}
$mazo = generarMazo();
mezclarCartas($mazo);
$puntos = 0;
while (!empty($mazo)) { // mientras haya cartas en el mazo
  $cartasMedio = dameCartasDelMedio($mazo);
  $manoJugador = dameCartasJugador($mazo);
  $puntos += cuantasEscobas($cartasMedio, $manoJugador);
}
echo "El jugador termino con: " . $puntos . " puntos."; 