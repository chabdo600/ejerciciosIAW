<?php

// Datos de conexión
$host = 'mysql';
$db = 'siga';
$user = 'abc';
$password = 'abcd';
$charset = 'utf8mb4';

// Cadena de conexión
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Insertar datos en la tabla modulos
$sql = "INSERT INTO modulos
        (nombre, abreviatura, creditos, horassemanales)
        VALUES
        ('Implantación de Aplicaciones Web', 'IAW', 6.00, 4),
        ('Administración de Sistemas Operativos', 'ASO', 8.00, 6),
        ('Servicios de Red e Internet', 'SRI', 7.00, 5)";

try {

    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($sql);

    echo "Datos insertados correctamente";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}