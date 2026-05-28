# PortafolioPOO

# Portafolio de Proyectos — Programación Orientada a Objetos

## Datos del alumno
Nombre completo: Leonardo Otoniel Rodriguez Moreno
Materia: Programación Orientada a Objetos
Docente: Jesús Salas Marín
Semestre: 2A

---

## Descripción general
Este repositorio contiene el portafolio de evidencias y proyectos prácticos desarrollados para la materia de **Programación Orientada a Objetos (POO)** en la carrera de **Ingeniería Informática** del **Instituto Tecnológico Superior de Lerdo**. El objetivo de este conjunto de aplicaciones es demostrar el dominio de conceptos fundamentales de la ingeniería de software y la arquitectura de sistemas, tales como la abstracción, el encapsulamiento, la herencia, el manejo de excepciones y la persistencia de datos.

### Tecnologías utilizadas
* **Lenguajes de programación:** PHP y Python
* **Paradigma Principal:** Programación Orientada a Objetos (POO)
* **UI/Diseño:** HTML5, CSS3 estructurado externamente
* **Herramientas de entorno:** Gestión de sesiones del servidor y manejo del sistema de archivos local (`File System`).

### Competencias desarrolladas
* Capacidad de modelar problemáticas reales mediante diagramas de clases UML y traducirlos a código limpio y tipado.
* Implementación de arquitecturas desacopladas separando la lógica de negocio (Backend) de la interfaz de usuario (Frontend).
* Control de seguridad y sanitización de datos de entrada en formularios web para prevenir la ejecución de código malicioso.
* Optimización algorítmica y análisis de costo computacional (Precisión vs. Rendimiento) mediante la resolución de integrales numéricas.

---

## Listado de proyectos incluidos

### 1. Analizador de Consumo Energético en Servidores (ABPj)
* **Tecnologías:** PHP, Namespaces, CSS Externo, HTML
* **Descripción:** Una herramienta web profesional diseñada para administradores de centros de datos (Data Centers) que calcula la Energía Total Consumida (en Joules y kWh) mediante la aproximación numérica de la regla del Trapecio sobre funciones de potencia variables.
* **Conceptos clave aplicados:** 
  * **Abstracción:** La clase `IntegradorNumerico` actúa como una caja negra matemática; la interfaz web interactúa con ella sin necesidad de conocer los detalles del cálculo integral.
  * **Encapsulamiento:** Las propiedades de límites y precisión (`$inicio`, `$fin`, `$pasos`) se protegen como variables `private`.
  * **Estructura Profesional:** Uso de Namespaces (`App\Calculo`) para organizar el código y evitar colisiones de nombres.
  * **Manejo de Excepciones:** Bloques `try-catch` para validar los datos de entrada en tiempo real (evitando tiempos iniciales mayores al final o precisiones negativas).

### 2. Sistema Integral de Gestión de Usuarios y Permisos
* **Tecnologías:** Python, Programación Orientada a Objetos Avanzada
* **Descripción:** Consola interactiva para administrar múltiples tipos de cuentas (Administradores, Clientes e Invitados) compartiendo información base pero asignando niveles de acceso específicos.
* **Conceptos clave aplicados:**
  * **Herencia Eficiente:** Creación de clases hijas (`Admin`, `Cliente`, `Invitado`) derivadas de la clase padre `Usuario`, centralizando la lógica común para una óptima escalabilidad.
  * **Uso de `super()`:** Invocación correcta de constructores base para la asignación de propiedades heredadas.
  * **Sobreescritura de Métodos (Polimorfismo):** Modificación del método `acceso_sistema()` en cada rol para desplegar reglas de negocio personalizadas de acuerdo al tipo de usuario.
  * **Encapsulamiento con Getters y Setters:** Control estricto del correo electrónico mediante `@property` y `@email.setter` para validar la estructura del email antes de guardarlo en variables privadas.

### 3. Sistema Web de Gestión de Bitácoras en Archivos de Texto
* **Tecnologías:** PHP, File System, Manejo de Formularios
* **Descripción:** Módulo web que gestiona registros persistentes guardando de manera segura cadenas de datos directamente sobre ficheros planos sin depender de un motor de bases de datos relacionales.
* **Conceptos clave aplicados:**
  * **Persistencia ligera:** Uso eficiente de funciones de flujo de archivos (`fopen()`, `fwrite()`, `fclose()`) para insertar registros de manera rápida y económica.
  * **Sanitización de Datos:** Implementación de `htmlspecialchars()` para neutralizar datos entrantes, protegiendo al backend de la inyección de código ejecutable por parte de usuarios maliciosos.
  * **Concurrencia básica:** Control de ciclos rápidos de apertura y cierre de archivos para mitigar errores por escrituras simultáneas.

### 4. Actividad Integradora - Control de Inventarios Dinámicos
* **Tecnologías:** PHP, Manejo de Sesiones del Servidor (`$_SESSION`), Arreglos Unidimensionales
* **Descripción:** Aplicación orientada a la administración de un stock de artículos, cálculo automatizado de estadísticas financieras y generación de reportes operativos en tiempo real.
* **Conceptos clave aplicados:**
  * **Estructuras de Datos:** Uso de arreglos unidimensionales paralelos para emparejar estrictamente productos con sus costos correspondientes, evitando asimetrías de datos.
  * **Persistencia en Sesión:** Integración de estados de sesión del servidor para asegurar que las colecciones no se destruyan al recargar o navegar por el sitio.
  * **Optimización de Funciones Nativas:** Empleo de funciones integradas de PHP (`array_sum()`, `max()`, `min()`) para agilizar operaciones matemáticas de reportes en lugar de recurrir a bucles e iteraciones manuales propensas a errores.

### 5. Examen Práctico Contra Reloj (Modelado de Datos Estrictos)
* **Tecnologías:** PHP 8 Strict Typing
* **Descripción:** Demostración de precisión sintáctica y modelado estructural puro completada bajo presión de tiempo, enfocada en la correcta declaración y visibilidad de propiedades.
* **Conceptos clave aplicados:**
  * **Tipado Estricto (Strict Typing):** Definición rigurosa de propiedades públicas en clases de logística (`Paquete`) y monitoreo ambiental (`Sensor`) ocupando tipos explícitos (`string`, `float`, `boolean`, `int`, `DateTime`).
  * **Restricción de Visibilidad:** Configuración de propiedades `private` (como `costoInterno`) para asegurar que no puedan ser alteradas externamente desde el script principal, garantizando el principio de encapsulación.