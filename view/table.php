<?php require_once __DIR__ . '/../autoload.php'; ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Таблица с данными</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>


<body>
<div class="container">
    <h2 class="text-center">Таблица с данными</h2>
    <table class="table table-bordered table-striped">
        <?php
        $process =  new \App\Db();
        $sql = "SELECT * FROM `feedback`";
        $data = $process->query($sql);
        ?>
        <thead class="table-dark">
        <tr>
            <th  scope="col" class="th_gray">ID</th>
            <th scope="col" class="th_red">FIO</th>
            <th scope="col" class="th_gray">Address</th>
            <th scope="col" class="th_red">Phone</th>
            <th scope="col" class="th_gray">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        usort($data, function($a, $b) {
            return $b->id - $a->id;
        });

        foreach ($data as $datum)
        { ?>
        <tr>
            <?php
            echo "<td>$datum->id</td>";
            echo "<td>$datum->FIO</td>";
            echo "<td>$datum->address</td>";
            echo "<td>$datum->phone</td>";
            echo "<td>$datum->email</td>";
            }
            ?>
        </tr>

        </tbody>
    </table>
</div>
</body>
</html>