# PHP Game

## Descripción

Este proyecto es un juego en PHP que utiliza un enfoque MVC (Modelo-Vista-Controlador). Se emplean las rutas y la autenticación para gestionar el acceso de los usuarios.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes componentes. Si ya los tienes instalados, puedes omitir este paso:

- PHP Version 8.2.12
- Composer

## Instalación

1. **Instala Composer**

   Asegúrate de tener Composer instalado en tu sistema. Puedes verificar su instalación ejecutando:

    ```bash
    composer --version
    ```
    Si no está instalado, consulta la documentación oficial de Composer para obtener instrucciones.
2. Inicializa el Proyecto
    Ejecuta el siguiente comando en la raíz de tu proyecto para inicializar Composer:

    ```bash
    composer init
    ```
3. Instala la dependencias
    A continuación, instala phroute/phroute ejecutando:
    ```bash
    composer require phroute/phroute
    ```
    Si realizas algún cambio en el archivo `composer.json`, asegúrate de ejecutar:
    ```bash
    composer dump-autoload
    ```
4. Instala Firebase JWT
    Para utilizar Firebase JWT en tu proyecto, ejecuta:
    ```bash
    composer require firebase/php-jwt
    ```
## Uso
Después de completar la instalación, puedes comenzar a trabajar en tu proyecto. Asegúrate de configurar tu entorno adecuadamente y de seguir la estructura del proyecto.

## Contribuciones
Las contribuciones son bienvenidas. Si deseas contribuir a este proyecto, por favor, sigue estos pasos:
1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`).
3. ealiza tus cambios y haz commit (`git commit -m 'Añadir nueva característica'`).
4. Envía un pull request.


### Sugerencias:

- Puedes personalizar el texto según la naturaleza específica de tu proyecto.
- Agrega secciones adicionales si tienes más información que compartir, como ejemplos de uso, pruebas, o notas sobre la estructura del código.
- Incluye enlaces a documentación relevante o tutoriales si crees que pueden ser útiles para otros desarrolladores.

Si necesitas más ajustes o detalles, ¡házmelo saber!


### Actulizaciones:
`20/10/2024`
- Se creo la autenticación por JWT
- Validación para el usuario cuando consulte (JWT)
- Se actualizo el nombre de archivo / clase (Users) por User