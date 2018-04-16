https://www.genbetadev.com/paradigmas-de-programacion/solid-cinco-principios-basicos-de-diseno-de-clases
https://es.wikipedia.org/wiki/SOLID

D-Inversión de dependencias (Dependency inversion) - DIP

 El objetivo de este principio conseguir desacoplar las clases.

 Las clases de nivel superior no deben conocer las clases de nivel inferior.

Dicho de otro modo, no debe conocer los detalles. Existen diferentes patrones
como la inyección de dependencias o service locator que nos permiten invertir el control.

El objetivo es el de no depender de una implementacion concreta sino de una interface.

<?php
// Clase sin inyeccion de dependencias
class MotorGasolina
{
    public function arrancar()
    {}

    public function parar()
    {}
}

class vehiculo
{
    private $motorGasolina;

    public function __construct()
    {
        $this->motor = new MotorGasolina();
    }
}

/**
 * Tenemos un alto acoplamiento a la clase MotorGasolina (A los Metodos definidos por esa
 * clase concreta y a usar esa clase) ya que Crea en la misma clase instancias
 * de las dependencias que necesita. Si un futuro se quiere usar otro motor (MotorElectico)
 * con otros metodos y usos nos veriamos obligados a hacer cambios grandes
 * tanto en esta clase como en otras posiblemente afectadas.
 *
 * Para empezar a aplicar la inversion de dependencias en primer lugar
 * se aplica la inyeccion de dependencias. Esto es , no instanciar en nuestra clase
 * sino recibirla.
 */

class vehiculo
{
    private $motorGasolina;

    public function __construct(MotorGasolina $motor)
    {
        $this->motor = $motor;
    }
}

/**
 * Con esto de momento lo que conseguimos es quitarle la responsabilidad a
 * la clase vehiculo de instanciar las dependencias.
 * Con esto abrimos la puerta a centralizar en un sitio (como otra clase usando el patron Factoria)
 * la responabilidad de cconstruir estos objetos.
 *
 * En este punto aun seguimos teniendo acoplamiento ya que igualmente hacemos
 * uso de un motor concreto (MotorGasolina).

 * Para invertir la dependencia necesitaremos que los objetos de las dependencias
 * (MotorGasolina) en este caso implemente una interfaz que deberían implementar todos 
 * los tipos de motor.
 * 
 * La interface proporciona un contrato que asegura que usando los metodos
 * arrancar() o parar() va hacer la correspondiente accion en el motor (de 
 * cualquier motor que implemente la interfaz).
 * 
 */

 interface iMotor
 {
     public function arrancar();
     public function parar();
 }

 class MotorGasolina implements iMotor
{
    public function arrancar()
    {}

    public function parar()
    {}
}

class MotorElectrico implements iMotor
{
    public function arrancar()
    {}

    public function parar()
    {}
}

class vehiculo{

    private $motorCualquiera;

    public function __construct(iMotor $motorCualquiera){
        $this->motorCualquiera = $motorCualquiera;;
    }
}

/**
 * Ahota indicando en el typehinting del constructor la interface iMotor
 * podemos pasarle cualquier tipo de motor , aplicando ya de esta manera 
 * la inversión de dependencias.
 *
 */

?>