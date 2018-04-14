O-Abierto/Cerrado (Open/Closed) - OCP

Principio atribuido a Bertrand Meyer que habla de crear clases extensibles sin necesidad 
de entrar al código fuente a modificarlo.

 Es decir, el diseño debe ser abierto para poderse extender pero cerrado para poderse modificar.

El uso más común de extensión es mediante la herencia y la reimplementación de métodos.

 Existe otra alternativa que consiste en utilizar métodos que acepten una interface 
 de manera que podemos ejecutar cualquier clase que implemente ese interface.
  En todos los casos, el comportamiento de la clase cambia sin que hayamos tenido que tocar código interno.


- Se dice que un módulo está abierto si se puede extender. Por ejemplo, se deberían poder 
añadir campos a la estructura de datos que contiene dicho módulo o nuevas funcionalidades a su comportamiento.

- Se dice que un módulo queda cerrado si queda utilizable para otros módulos. Esto implica que dicho módulo goza de una descripción estable y bien definida (implicando a su interfaz pública, en el sentido de protección de la información).