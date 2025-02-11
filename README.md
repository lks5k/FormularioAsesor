# Formulario Asesor

## Instalación

1. Clona el repositorio en tu servidor local:
    ```bash
    git clone <URL_DEL_REPOSITORIO>
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd FormularioAsesor
    ```

3. Crea la base de datos y las tablas necesarias ejecutando el script SQL:
    ```bash
    mysql -u root -p < crear_base_datos.sql
    ```

4. Configura tu servidor web (XAMPP) para que apunte al directorio del proyecto.

## Uso

1. Abre el navegador y navega a `http://localhost/FormularioAsesor/formulario.html` para acceder al formulario de solicitud.

2. Para consultar los datos, navega a `http://localhost/FormularioAsesor/consultar_datos.php`.

## Dependencias

- PHP
- MySQL
- Servidor web (XAMPP recomendado)

## Seguridad

- Asegúrate de configurar correctamente las credenciales de la base de datos en los archivos PHP.
- Implementa medidas de seguridad adicionales como autenticación y validación de datos.

## Contribuciones

Las contribuciones son bienvenidas. Por favor, abre un issue o un pull request para discutir cualquier cambio que desees realizar.
