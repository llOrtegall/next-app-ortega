<?php

$servidor = 'localhost'; // * 127.0.0.1
$baseDeDatos = 'app';
$user = 'root';
$pass = '';

try {
    $conexcion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos;$user,$pass");
} catch (\Throwable $th) {
    //throw $th;
}
