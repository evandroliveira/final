<?php
/**
 * Created by PhpStorm.
 * User: evandro.oliveira
 * Date: 15/03/2019
 * Time: 10:38
 */

try {
    $pdo = new PDO("mysql:dbname=clube_pontos;host=localhost", "root", "");

} catch (PDOException $e) {
    echo "ERRO:".$e->getMessage();

    exit;
}