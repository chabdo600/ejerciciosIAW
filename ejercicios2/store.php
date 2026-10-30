<?php

// Recibimos los datos del formulario
$nombre = $_POST['nombre'];
$abreviatura = $_POST['abreviatura'];
$creditos = $_POST['creditos'];
$horassemanales = $_POST['horassemanales'];

// Datos de conexión
$host = 'mysql';
$db = 'siga';
$user = 'abc';
$password = 'abcd';
$charset = 'utf8mb4';

// Cadena de conexión
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Consulta SQL
$sql = "INSERT INTO modulos
        (nombre, abreviatura, creditos, horassemanales)
        VALUES
        (:nombre, :abreviatura, :creditos, :horassemanales)";

try {

    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparamos la consulta
    $stmt = $pdo->prepare($sql);

    // Ejecutamos la consulta
    $stmt->execute([
        ':nombre' => $nombre,
        ':abreviatura' => $abreviatura,
        ':creditos' => $creditos,
        ':horassemanales' => $horassemanales === '' ? null : $horassemanales
    ]);

    // Si todo va bien
    header("Location: exito.php");
    exit;

} catch (PDOException $e) {

    // Si ocurre algún error
    header("Location: error.php");
    exit;

}