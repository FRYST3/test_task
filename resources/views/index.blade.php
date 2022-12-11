<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link type="text/css" rel="StyleSheet" href="https://bootstraptema.ru/plugins/2016/shieldui/style.css" />
    <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="https://bootstraptema.ru/plugins/2016/shieldui/script.js"></script>

    <title>Task</title>
</head>
<body>
<div class="col-12 mt-3">
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Пользователь</th>
                    <th>Баланс</th>
                    <th>Профиль VK</th>
                    <th>Привилегии</th>
                    <th>IP Адрес</th>
                    <th>Бан</th>
                    <th style="text-aling: center;">Действия</th>
                  </tr>
                </thead>
                <tbody id="content">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>