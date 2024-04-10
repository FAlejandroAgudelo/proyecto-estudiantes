El proyecto se realizo con las siguientes herramientas: 

PostgresSQL 16
https://www.postgresql.org/download/

XAMPP
https://www.apachefriends.org/es/download.html

VISUAL STUDIO
https://code.visualstudio.com/download

HTML
CSS
PHP

Manual de despliegue

dentro de la carpeta proyecto código fuente hay una carpeta llamada proyecto, dentro de esa carpeta esta todo el proyecto realizado.
solo es abrir con visual studio o su editor de código la carpeta llamada proyecto.
dentro se desplegaría una carpeta llamada estiloscss (es donde va todos los estilos realizados).
style.css son los estilos del index y el login
stylee.css es el estilo de ingreso.php
hay otra carpeta llamada images (las cuales albergan la imágenes tipo svg que se utilizaron para los iconos del registro).
el resto es el código php.

se utilizo xampp como servidor apache para tener interacción con lo realizado en el proyecto.
se descargo de la página oficial antes mencionada, solo fue seguir los pasos de instalación he iniciar el servidor apache.
en config hay una opción llamada php.ini, abrimos, ahí vamos a editar y buscar, escribimos pg y donde dice
;extension=pdo_pgsql seria quitarles el punto y coma y quedar así: 
extension=pdo_pgsql
el mismo paso para (extension=pgsql) si tiene punto y coma quitárselo.
Una vez realizados los cambias guardamos, paran el servidor y lo vuelven habilitar y el servidor apache ok.

para la parte de PostgresSQL

yo descargue el 16 de la página oficial.
Solo es utilizar el archivo de bases de datos que les envio llamando dbphp.backup, importarlo desde postgres
al abrirlo se encuentran con 2 tablas, una llamada datos que es donde guardamos los datos del estudiante y la tabla notas que es donde registramos las notas obtenidas.
les mando mi configuración de base de datos que utilice

	host=localhost
    	port=5432
    	dbname=dbphp
    	user=postgres
    	password=password

se adjunta video mostrando a grandes rasgos el manejo del proyecto.

NOTA: Se comprimió el video ya que no daba la capacidad para subirlo en 1920 * 1080.

Feliz día.
