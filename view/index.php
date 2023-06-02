<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-container">
            <h2 class="text-center form-heading">Форма обратной связи</h2>
            <form action="processing.php" method="POST">
                <div class="form-group">
                    <input type="text" name="FIO" class="form-control" id="fullName" placeholder="ФИО:" required>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" id="address" placeholder="Адрес:" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Телефон:" pattern="[0-9]{11}" required>
                    <small class="form-text text-muted">Введите номер телефона в формате 11 цифр без пробелов и разделителей</small>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail:" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Отправить</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>