# README - Proyecto: Gestión de Inventario con Arreglos Unidimensionales

## 1. Nombre del proyecto
**Sistema de Control de Inventario en PHP**

## 2. Objetivo del proyecto
Desarrollar una aplicación web que permita gestionar colecciones de datos (productos y precios) utilizando arreglos unidimensionales, facilitando el procesamiento estadístico de inventarios.

## 3. Problema que resuelve
El proyecto soluciona la necesidad de:
* Almacenar múltiples productos y sus costos de forma temporal sin base de datos.
* Calcular automáticamente métricas financieras: Total acumulado, Precio promedio, Producto más caro y Producto más barato.
* Evitar la pérdida de datos al recargar la página gracias al uso de variables de sesión (`$_SESSION`).

## 4. Tecnologías utilizadas
* **PHP 8.x**: Uso de funciones nativas para arreglos y manejo de sesiones.
* **HTML5**: Estructura de formularios para la entrada de datos.
* **CSS3**: Diseño de la interfaz de usuario.
* **Servidor Local**: XAMPP / Apache.

## 5. Conceptos aplicados
* **Arreglos Unidimensionales**: Organización de datos similares (nombres y precios) en colecciones indexadas.
* **Persistencia de Datos**: Uso de `session_start()` para mantener el inventario activo durante la navegación del usuario.
* **Funciones Nativas de PHP**:
    * `array_sum()`: Para obtener el valor total del inventario.
    * `max()` / `min()`: Para identificar valores extremos (más caro/barato).
    * `count()`: Para el cálculo de promedios.
* **Iteración**: Uso de ciclos para renderizar la lista de productos agregados.

## 6. Capturas de pantalla estan a parte


## 7. Instrucciones de ejecución
1.  Asegúrate de tener **XAMPP** instalado y el servicio **Apache** iniciado.
2.  Crea una carpeta llamada `inventario` en `C:/xampp/htdocs/`.
3.  Coloca el archivo del proyecto (ej. `index.php`) dentro de esa carpeta. (De preferencia añade una carpeta y pon ahi los archivos)
4.  Accede desde tu navegador a: `http://localhost/nombre_carpeta/index.php`. (cambiable si esta dentro de una carpeta o en el htdocs)

## 8. Reflexión personal
* **¿Qué aprendí?**
    Reforcé el uso de arreglos unidimensionales para agrupar datos relacionados y descubrí cómo las **Sesiones en PHP** permiten que una aplicación web "recuerde" información entre diferentes solicitudes del navegador.
* **¿Qué fue difícil?**
    Lo más complejo fue asegurar que el programa no fallara si los arreglos de productos y precios perdían su sincronía y la implementación de la lógica para vaciar la sesión correctamente.
* **¿Qué mejoraría?**
    Añadiría una función de "Eliminar" para cada producto individual usando su índice en el arreglo y una opción para exportar el reporte final a un archivo PDF.