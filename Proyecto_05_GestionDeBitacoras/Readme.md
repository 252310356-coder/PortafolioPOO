# README - Proyecto 5: Gestión de Bitácoras en Archivos de Texto

## 1. Nombre del proyecto
**LogWriter - Sistema de Gestión de Bitácoras en PHP**

## 2. Objetivo del proyecto
Desarrollar una aplicación web que permita la captura, validación y persistencia de registros de bitácora directamente en archivos de texto planos utilizando funciones nativas de manejo de archivos de PHP.

## 3. Problema que resuelve
El proyecto soluciona la necesidad de:
*   **Persistencia económica y ligera:** Permite almacenar datos de forma estructurada sin incurrir en los costos de configuración o infraestructura de una base de datos relacional.
*   **Integridad de registros:** Protege el archivo de registro frente a inyecciones de código malicioso ejecutadas por usuarios externos mediante la entrada de formularios.
*   **Seguimiento de eventos:** Centraliza un registro histórico rápido de eventos, errores o accesos del sistema de manera cronológica.

## 4. Tecnologías utilizadas
*   **Lenguaje:** PHP 8.x (Manejo de archivos del lado del servidor).
*   **Frontend:** HTML5 (Formularios de captura de datos).
*   **Servidor Local:** XAMPP / Servidor Apache.

## 5. Conceptos aplicados
*   **Manejo de Archivos (I/O):** Uso estratégico de funciones nativas de bajo nivel como `fopen()`, `fwrite()` y `fclose()` para abrir, escribir de manera secuencial y cerrar flujos de datos.
*   **Seguridad y Sanitización:** Implementación de la función `htmlspecialchars()` para transformar caracteres especiales entrantes en entidades HTML, evitando que usuarios maliciosos inyecten y ejecuten código dentro del servidor o del archivo de registro.
*   **Validación de Formularios:** Procesamiento de variables globales `$_POST` asegurando la correcta recepción y filtrado de los datos antes de guardarlos.

## 6. Capturas de pantalla estan a parte

## 7. Instrucciones de ejecución
1.  Mover o copiar la carpeta del proyecto dentro del directorio de despliegue `htdocs` en tu servidor local XAMPP.
2.  Iniciar los servicios del servidor **Apache** desde el Panel de Control de XAMPP.
3.  Abrir el navegador web e ingresar la ruta correspondiente: `http://localhost/nombre_de_tu_carpeta/index.php`.
4.  Llenar el formulario de registro y enviar los datos para verificar que se anexen de forma correcta al archivo de bitácora de texto.

## 8. Reflexión personal
*   **¿Qué aprendí?**
    Reforcé mis conocimientos en el control de formularios de entrada, su respectiva sanitización mediante `htmlspecialchars()` y aprendí el funcionamiento práctico y de bajo nivel del ciclo de archivos empleando `fopen`, `fwrite` y `fclose`.
*   **¿Qué fue difícil?**
    El ejercicio se completó de manera bastante ágil y fluida, funcionando como un excelente ejercicio de refuerzo, dado que las complicaciones previas con la lógica de formularios y la persistencia compleja se habían resuelto y asimilado en las prácticas anteriores.
*   **¿Qué mejoraría?**
    Investigaría e implementaría funciones alternativas y modernas de una sola línea como `file_put_contents()` junto con la bandera `FILE_APPEND`, o añadiría un sistema de bloqueo de archivos (`flock`) para asegurar la estabilidad total del archivo en caso de concurrencia de múltiples usuarios simultáneos.