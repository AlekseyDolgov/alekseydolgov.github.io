<?php


spl_autoload_register(function ($class) {
    // Преобразование пространства имен в путь к файлу
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    // Проверка наличия файла и его загрузка
    if (file_exists($file)) {
        require_once $file;
    }
});