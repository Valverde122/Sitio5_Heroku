<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Ejemplos con funciones y estructuras de control</h2>
    <?php
    require_once("repositorio.php");
    echo "<h3>Ejercicio 1</h3>";
    $resultado=transformar("hola");
    echo $resultado;


    $totalfactura =calcularTotal(100,4.95,0.21);
    echo "<p>total de la factura es : " . $totalfactura . "€(iva incluido) </p>";
    $totalfactura2 =calcularTotal2(100,4.95,"reducido");
    echo "<p>total de la factura es : " . $totalfactura2 . "€(iva en funcion del tipo) </p>";
    echo "<br>";

    $mensajeResultado=manipularString("En un lugar de la mancha");
    echo $mensajeResultado;

    echo "<br>";
    //Primera leta en mayuscula
    $primeraLetra=primeraMayuscula("");
    echo "<p>$primeraLetra </p>";

    echo "<br>";
    //Cambiar la e por la e
    echo "<p>" . str_replace('a' , 'e', 'España') . "</p>";

    //Que te de la fecha en mes en castellano
    setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
    $string = "21/01/2022";
    $date = DateTime::createFromFormat("d/m/Y", $string);
    echo strftime("%B",$date->getTimestamp());
    echo "<br>";
    //version de php y servidor
    
    $version = apache_get_version();
    echo "<br>";
    echo "$version\n";

    echo "<br>";
    //Primo o no
    function esPrimo($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
    $a = esPrimo(3);
    if ($a==0)
        echo 'No es un número primo'."\n";
    else
        echo 'Es un número primo...'."\n";

    //saber si es bisiesto o no
    function esBisiesto($year=NULL) {
        $year = ($year==NULL)? date('Y'):$year;
        return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 );
    }
    



    ?>
</body>
</html>