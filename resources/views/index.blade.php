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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/app.js"></script>

    <title>Task</title>
</head>
<body>
<div class="col-12 mt-3">
<button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#create_user">Создать пользователя</button>
            <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>ID</th>
                    <th>Пользователь</th>
                    <th>Баланс</th>
                    <th>Пароль</th>
                    <th style="text-aling: center;">Действия</th>
                  </tr>
                </thead>
                <tbody id="content">
                @foreach($userget as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->balance }}</td>
                        <td>{{ $user->password }}</td>
                        <td><button type="button" class="btn btn-primary btm-sm" onclick="location.href='/crud/{{ $user->id }}'">Редактировать</button></td>
                        <td><button type="button" class="btn btn-danger btm-sm" onclick="location.href='/delete/{{ $user->id }}'">Удалить</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="create_user_label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="create_user_label">Создание пользователя</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/user/new" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="name">Ник</label>
                        <input type="text" required class="form-control" id="name" name="name">

                        <label for="password" class="mt-2">Пароль</label>
                        <input type="number" required class="form-control" id="password" name="password">

                        <label for="balance" class="mt-2">Баланс</label>
                        <input type="number" required class="form-control" id="balance" name="balance">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="wallet-form">
        <div class="form-row">
            <form action="/pay/fk" method="POST">
                                            <p class="form-label">Сумма пополнения:</p>
                                            <label class="label">
                                                    <div class="wallet-input">
                                                        <input type="number" step="1" name="text" placeholder="Введите сумму пополнения" class="input" id="amount-deposit">
                                                        <div class="right-label">
                                                            <div class="currencies"></div>
                                                        </div>
                                                    </div>
                                            </label>
                                        </div>
                                        <div class="form-row"></div>
                                        <div class="form-row form-sumbit">
                                            <div class="currency-sumbit">
                                                <button class="submit-btn deposit__btn button" type="sumbit">Пополнить</button>
                                            </div>
                                        </div>
                                        </form>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>