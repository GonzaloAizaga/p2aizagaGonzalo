<?php                        //PRACTICA 1
/*
function sumaDeNumeros($arreglo){
    $resultado = 0;
    foreach($arreglo as $elemento){
        $resultado = $elemento + $resultado;  
    }
        return $resultado;  
}
$array=[15,33,50,47,64,41];
$resultado=sumaDeNumeros($array);
echo("La suma del array es: ");
echo($resultado);
//El "echo" no muestra un array, te muestra error. Para mostrar un array se necesita de un print_r
*/

                            //PRACTICA 2
/*
$array = [1,4,3,7,2,9,20,8,5];
sort($array);
print_r($array);
*/

                            //PRACTICA 3
/*
$array=[1,2,3,2,4,3,5];
$resultado= array_unique($array);
print_r($resultado);
*/

                            //PRACTICA 4
/*
function busqueda($arreglo,$aux){
        $aux1 = [];
        $i = 0;
        $z = 0;
        foreach($arreglo as $elemento){    
            foreach($aux as $elemento2){
                if ($elemento == $elemento2){
                    $aux1[$z] = $i;  
                    $z++;
                }
            }
         $i++;   
        }
        return $arreglo = $aux1;
    };
$aux = [4,1,5];
$array=[1,4,5,6,7,2,3];
$arreglo = busqueda($array,$aux);
print_r($arreglo);
*/

                            //PRACTICA 5
/*
$array=[2,5,9,8,4,22];
$array1=[0,33,45,11,17];
$juntarArrays=array_merge($array,$array1);
foreach($juntarArrays as $elemento){
    if(($elemento % 2) ==1){
        print_r($elemento);
        echo ".  ";
    }
}
*/


//ARRAYS ASOCIATIVOS

/*$clubes=array(
    "San Lorenzo" =>array(
        "Jugadores" =>array(
            "Nahuel Barrios",
            "Adam Barreiro",
            "Augusto Batalla")
    ),
    "Independiente" =>array(
        "Jugadores" =>array(
            "Rey",
            "Marcone",
            "Cauteruccio")
    )
);

//print_r($clubes["San Lorenzo"]["Jugadores"]);           
                                  
                                  //Practica 1 Arrays Asociativos
/*
function verJugador ($arreglo, $nombreClub, $nombreJugador){
    $aux = 0;
    foreach($arreglo[$nombreClub]["Jugadores"] as $elemento){
        if ($nombreJugador == $elemento){
            return "El jugador:". $nombrejugador. " existe";
            $aux = 1;
        }
    }
    if ($aux == 0){    
        return "El jugador no existe";
    }
}
$nombreJugador = "Nahuel Barrios";
$nombreClub = "San Lorenzo";

$resultado = existeJugador($clubes,$nombreClub,$nombreJugador);

echo($resultado)
*/

                                // Practica 2 Arrays Asociativos
/*
function queClubJuega($clubes, $nombreJugador) {
    foreach ($clubes as $club => $datos) {
        $jugadores = $datos['Jugadores'];
        foreach ($jugadores as $jugador) {
            if ($jugador === $nombreJugador) {
                return $nombreJugador." juega en el club " . $club . ".";
            }
        }
    }
    return 'No se encontró información sobre el club de Marcone.';
}
$nombreJugador = "Caute";
$resultado = queClubJuega($clubes, $nombreJugador);
echo $resultado;
*/

?>