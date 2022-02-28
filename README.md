# PHPconPDOyXML
Servicio Web en php que permite consultara una base de datos usando PDO y mostrar opciones para el filtro de consulta llamando a un XML

# BDMIRA
Contiene el archivo "habitacion.sql" para generar la base de datos neceesaria (dbmira) para realizar las pruebas de forma local, en este caso se uso XAMPP.

# Clases
Contiene 2 clases, las cuales se encargan de:

- Construir la conexion a la base de datos y retornar esta para ser usada.
- Contruir el objeto Habitacion que sera usado.

# Funciones

Contiene 3 funciones principales:
   
- BuscarPorPrecio: Realiza el fildrado a la base de datos recogiendo el argumento enviado via $_POST[Precio]
- BuscarTodas:
- CargarPrecios:

