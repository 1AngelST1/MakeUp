# Proyecto: Tienda en Línea de Videojuegos 

## 📋 Descripción del Proyecto
Este repositorio contiene el código fuente y la base de datos de un sitio web funcional de comercio electrónico desarrollado con **WordPress** y **WooCommerce**. 

El proyecto fue realizado como parte de la práctica "Desarrollo Integral de una Tienda en Línea" para la materia de Desarrollo de Sitios Web.

El sitio implementa el ciclo completo de desarrollo, incluyendo la instalación del entorno, diseño visual con **Full Site Editing (FSE)** y bloques de Gutenberg, configuración de productos, optimización SEO y medidas de seguridad.

## 🎮 Tema Elegido
**Dominio:** Venta de Videojuegos y Entretenimiento Digital.

El sitio simula una tienda especializada ("Retail") enfocada en la venta de:
* **Videojuegos:** Títulos recientes y clásicos para diversas plataformas (PlayStation, Xbox, PC).

Se ha personalizado la identidad visual, las categorías y las descripciones de los productos para ofrecer una experiencia de usuario coherente con el mercado gamer.

## 🛠️ Tecnologías Utilizadas
* **CMS:** WordPress (Última versión).
* **E-commerce:** WooCommerce.
* **Diseño:** Editor de Sitios (FSE), Bloques de Gutenberg y Patrones personalizados.
* **Entorno de Desarrollo:** [XAMPP ].

## 🚀 Pasos para ejecutar el sitio en local
Para visualizar este proyecto en tu computadora, sigue estos pasos:

1.  **Descargar el repositorio:**
    Clona este repositorio o descarga el archivo ZIP y extrae el contenido en tu carpeta de servidor local (ej. `htdocs` en XAMPP o la carpeta de sitios en LocalWP).

2.  **Importar la Base de Datos:**
    * Localiza el archivo `.sql` incluido en este repositorio (generalmente en la raíz o en una carpeta llamada `/db`).
    * Abre tu gestor de base de datos (phpMyAdmin, TablePlus, etc.).
    * Crea una nueva base de datos vacía.
    * Importa el archivo SQL en dicha base de datos.

3.  **Configurar la conexión (wp-config.php):**
    * Abre el archivo `wp-config.php` en la raíz del proyecto.
    * Modifica los valores `DB_NAME`, `DB_USER` y `DB_PASSWORD` para que coincidan con las credenciales de tu entorno local.

4.  **Ajuste de URLs (Opcional pero recomendado):**
    * Si el dominio local cambia (ej. de `localhost/mitienda` a `mitienda.local`), asegúrate de actualizar las rutas en la tabla `wp_options` (opciones `siteurl` y `home`) en la base de datos.

5.  **Acceso:**
    * Abre tu navegador e ingresa a la URL local.
    * Para entrar al panel de administración usa `/wp-admin`.
    * **Usuario:** [Tu usuario, ej: admin]
    * **Contraseña:** [Tu contraseña, ej: admin123]

## 👤 Autor
**Angel Sarmiento Totolhua**
BUAP - Facultad de Ciencias de la Computación