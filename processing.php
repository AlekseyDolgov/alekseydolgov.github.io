<?php
require_once __DIR__ . '/autoload.php';

$process =  new \App\Db();

$fio = $_POST["FIO"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];

$sql = "INSERT INTO feedback (`FIO`, `address`, `phone`, `email`)
VALUES ('$fio', '$address', '$phone', '$email')";


$process->execute($sql);

header("Location: view/table.php");
exit();