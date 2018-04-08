<?php

$alimentos = array(
    'Fruta' => array(
        'tropical' => 'kiwi',
        'citrico' => 'mandarina',
        'otros' => 'manzana',
    ),
    'Leche' => array(
        'animal' => 'vaca',
        'vegetal' => 'coco',
    ),
    'Carne' => array(
        'vacuno' => 'lomo',
        'porcino' => 'pata',
    ),
);

echo $alimentos['Carne']['vacuno'] . '<br>';

/**
 * RECORRER ARRAY MULTIDIMENSIONAL
 */

/**
 * $tipoAlimento (Fruta,Leche,Carne)
 * $variedades (cada uno de los arrays)
 */
foreach ($alimentos as $tipoAlimento => $variedades) {
    /**
     * $variedad(tropical,citrico,otros,animal,etc)
     * $alimento(kiwi,mandarina,manzana,vaca,coco,etc)
     */
    echo 'Tipo alimento: ' . $tipoAlimento . ' <br>';

    foreach ($variedades as $variedad => $alimento) {
        echo 'Variedad: ' . $variedad . ' Alimento: ' . $alimento . '<br>';
    }

}

/**
 * OTRO EJEMPLO CON ARRAY ASOCIATIVO E INDEXADO
 */
echo '<br><br>';

$tareas = [
    'Lunes' => array(
        'Estudiar',
        'Comprar',
    ),
    'Martes' => array(
        'Presentar',
        'Repasar',
        'Adelantar trabajo',
    ),
    'Viernes' => array(
        'Pedir cita',
        'Arreglar ordenador',
        'Hacer examen',
        'Mirar notas',
    ),
    'Sabado' => array(
        'Descansar',
    ),
    'Domingo' => array(
        'Descansar',
        'Preparar inicio de semana',
    ),
];

foreach ($tareas as $diaSemana => $listaTareas) {
    echo $diaSemana . ':<br>';

    foreach ($listaTareas as $tarea) {
        echo $tarea . '<br>';
    }

}

/**
 * OTRO EJEMPLO CON ARRAYS INDEXADOS
 */

echo '<br><br>';

$coches = array(
    array(
        'Seat',
        'Rojo',
        'Azul',
        'Blanco',
    ),
    array(
        'Ford',
        'Dorado',
        'Plateado',
    ),
    array(
        'Toyota',
        'Negro',
    ),
);

$i = 0;
$x = 0;

while(array_key_exists($i,$coches)){
    $x = 0;
   while (array_key_exists($x,$coches[$i])){
        echo $coches[$i][$x] . '<br>';
        $x += 1;
   }
   $i += 1;
}
