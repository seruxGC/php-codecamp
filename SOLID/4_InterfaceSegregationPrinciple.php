I-Segregacion del interface (Interface segregation) - ISP

 Cuando se definen interfaces estos deben ser específicos a una finalidad concreta.
  Por ello, si tenemos que definir una serie de métodos abstractos que debe utilizar 
  una clase a través de interfaces, es preferible tener muchos interfaces que definan
   pocos métodos que tener un interface con muchos métodos.

El objetivo de este principio es principalmente poder reaprovechar los interfaces en otras clases.

Se debe enfocar a segregar las interfaces teniendo en cuenta a las necesidades que vayan a tener los CLIENTES.

Al cliente le debemos el minimo de implementaciones , es decir, dar solamente las implementaciones que necesite.

<?php

/**
 * Dada una interfaz mal diseñada como esta:
 * 
 * Pueden aparecer problemas como que haya vehiculos que no tengan radio
 * y que necesariamente tengan que implementar los metodos relacionados
 * con la radio.
 */
interface iVehiculo
{
    public function encenderMotor();
    public function acelerar();
    public function frenar();
    public function encenderRadio();
    public function apagarRadio();
    public function ponerIndicadores();
}

/**
 * Esto se podria mejorar en principio de la siguiente manera
 * 
 * Aplica ISP pero no SRP ya que clases como coche seguira teniendo todas 
 * las responsabilidades
 */

 interface iControlDeVelodidad
 {
    public function encenderMotor();
    public function acelerar();
    public function frenar();
 }

 interface iControlDeRadio
 {
    public function encenderRadio();
    public function apagarRadio();
 }

 interface iControlIndicadores
 {
    public function ponerIndicadores();
 }

 class cocheConRadio implements iControlDeVelodidad, iControlDeRadio , iControlIndicadores
 {
     /* Un coche con radio si que necesita tener metodos relacionados con la radio
     y tenemos una interfaz para ello */
 }

 class cocheSinRadio implements iControlDeVelodidad , iControlIndicadores
 {
     /* Este coche sin radio no necesita saber que se puede encender o no la radio
     ni tener que implementar como se hace. */
 }

 class camionSinRadioNiIndicadores implements iControlDeVelodidad
 {
     // Este camion solo necesita saber los metodos correspondientes a la velocidad
 }
?>