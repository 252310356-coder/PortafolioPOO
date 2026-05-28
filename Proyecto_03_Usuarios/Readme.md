# README - Proyecto: Analizador de Consumo Energético en Servidores

## 1. Nombre del proyecto
**Monitor Energético / Analizador de Joules para Servidores**

## 2. Objetivo del proyecto
El objetivo es crear una herramienta web profesional que permita a los administradores de sistemas calcular la Energía Total Consumida (Joules) mediante la integral definida de la función de potencia P(t) en un intervalo de tiempo [a, b].

## 3. Problema que resuelve
Este proyecto automatiza el cálculo del consumo eléctrico para:
* Facturación precisa a clientes en servicios de nube.
* Cálculo de la huella de carbono en centros de datos.
* Proveer una alternativa eficiente al cálculo simbólico mediante la integración numérica.

## 4. Tecnologías utilizadas
* **PHP 8.x**: Lógica del servidor y tipado estricto.
* **HTML5 / CSS3**: Interfaz de usuario y diseño externo.
* **XAMPP**: Servidor local Apache.

## 5. Conceptos aplicados
* **Namespaces**: Uso de `namespace App\Calculo` para organizar el software profesionalmente.
* **Encapsulamiento**: Propiedades privadas ($inicio, $fin, $pasos) para asegurar la integridad de los datos.
* **Manejo de Excepciones**: Validación de datos mediante bloques `try-catch` para evitar errores en tiempo de ejecución.
* **Abstracción**: Implementación de la lógica como una "caja negra" donde el usuario solo interactúa con los parámetros de entrada.
* **Algoritmos Numéricos**: Aplicación de la Regla del Trapecio para aproximaciones matemáticas.

## 6. Capturas de pantalla
*(Incluir aquí las imágenes del funcionamiento del proyecto)*
1. **Formulario de entrada**: Configuración de tiempos y precisión.
2. **Ejecución**: Procesamiento de los datos por la clase lógica.
3. **Resultados**: Visualización de los Joules consumidos y la tabla comparativa de precisión.

## 7. Instrucciones de ejecución
1.  **Copiar carpeta**: Colocar el proyecto dentro del directorio `htdocs` de XAMPP.
2.  **Iniciar Apache**: Abrir el panel de XAMPP y activar el servidor.
3.  **Abrir localhost**: Navegar a xampp\htdocs\PortafolioPOO\Proyecto_03_Usuarios. (Esto puede cambiar dependiendo de donde guardes los archivos de la app)
4.  **Configurar**: Ingresar el tiempo inicial, tiempo final y el nivel de precisión deseado.

## 8. Reflexión personal
* **¿Qué aprendí?**
    Aprendí a estructurar aplicaciones PHP utilizando Namespaces y a implementar lógica matemática compleja separada de la interfaz de usuario, siguiendo estándares profesionales de POO.
* **¿Qué fue difícil?**
    Lo más desafiante fue la correcta implementación del bucle para la Regla del Trapecio y asegurar que el manejo de excepciones capturara correctamente los errores lógicos.
* **¿Qué mejoraría?**
    Mejoraría la interfaz añadiendo gráficos dinámicos que representen la curva de potencia y permitiría al usuario definir funciones personalizadas en lugar de perfiles preestablecidos.