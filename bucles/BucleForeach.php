<?php

// Declaracion bucle foreach

foreach($array as $value){
    // code
}

// Bucle foreach con array asociativo

foreach($array as $key => $value){
    // code
}

/**
 * La referencia del $valor y el último elemento del array permanecen aún 
 * después del bucle foreach. Se recomienda destruirlos con unset().
 */