1. Nombre del proyectoCloud Energy Monitor (Analizador de Consumo en Servidores)   

2. Objetivo del proyectoCrear una herramienta web profesional para administradores de sistemas que permita calcular la Energía Total Consumida (Joules) de un servidor, mediante la integración numérica de la función de potencia $P(t)$ en un intervalo de tiempo determinado.  

3. Problema que resuelveEn los Data Centers, el consumo de energía varía según la carga de la CPU. Este software permite:  Calcular con precisión el gasto energético para facturación de clientes en la nube.  Determinar la huella de carbono del hardware.  Aproximar integrales complejas de forma eficiente mediante la Regla del Trapecio.  

4. Tecnologías utilizadasLenguaje: PHP 8.x.  Arquitectura: Programación Orientada a Objetos (POO).  Frontend: HTML5 y CSS3 (estilos externos).  Entorno: XAMPP / Servidor Apache.

5. Conceptos aplicados Namespaces: Uso de App\Calculo para organizar el código y evitar colisiones de nombres.  Encapsulamiento: Propiedades privadas ($inicio, $fin, $pasos) para proteger la integridad de los datos.  Abstracción: La clase IntegradorNumerico funciona como una "caja negra" que procesa datos complejos.  Manejo de Excepciones: Bloques try-catch para validar que el tiempo inicial sea menor al final y que la precisión sea positiva.  Costo Computacional: Análisis de la relación entre precisión ($n$) y rendimiento.  

## 6. Capturas de pantalla estan a parte

7. Instrucciones de ejecuciónCopiar la carpeta monitor_energetico en el directorio htdocs de XAMPP.  Asegurarse de mantener la estructura de carpetas: src/Calculo/IntegradorNumerico.php e index.php.  Activar el módulo Apache en el panel de control de XAMPP.Acceder desde el navegador a: http://localhost/Nombre_de_tu_carpeta/index.php.

8. Reflexión personal
¿Qué aprendí?
Aprendí la importancia de los Namespaces para profesionalizar el código y cómo la POO permite separar la lógica matemática (Cálculo) de la interfaz de usuario (index.php). 

¿Qué fue difícil?
Lo más desafiante fue implementar correctamente la Regla del Trapecio dentro de un ciclo for y asegurar que el manejo de excepciones capturara errores de entrada antes de realizar el cálculo.  

¿Qué mejoraría?
Implementaría una estructura de control para que el usuario elija entre diferentes perfiles de carga (IDLE, AVERAGE, STRESS) en lugar de tener la función fija, y añadiría una conversión automática a kWh para reportes financieros.  

