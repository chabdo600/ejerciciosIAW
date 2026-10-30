<?php

// Datos de conexión a MySQL
$host = 'mysql';
$db = 'siga';
$user = 'abc';
$password = 'abcd';
$charset = 'utf8mb4';

// Cadena de conexión
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Crear la tabla modulos
$sql = "CREATE TABLE IF NOT EXISTS modulos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL unique,
        abreviatura VARCHAR(100) NOT NULL,
        creditos decimal(4,2) NOT NULL,
        horassemanales smallint,
        CONSTRAINT uq_nombre_abreviatura UNIQUE (nombre, abreviatura)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

try {

    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec($sql);

    echo "Tabla modulos creada correctamente";

} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();

}