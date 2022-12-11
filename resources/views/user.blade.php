<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link type="text/css" rel="StyleSheet" href="https://bootstraptema.ru/plugins/2016/shieldui/style.css" /> -->
    <!-- <script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script> -->
    <!-- <script src="https://bootstraptema.ru/plugins/2016/shieldui/script.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js" integrity="sha512-lOrm9FgT1LKOJRUXF3tp6QaMorJftUjowOWiDcG5GFZ/q7ukof19V0HKx/GWzXCdt9zYju3/KhBNdCLzK8b90Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" integrity="sha512-NXUhxhkDgZYOMjaIgd89zF2w51Mub53Ru3zCNp5LTlEzMbNNAjTjDbpURYGS5Mop2cU4b7re1nOIucsVlrx9fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <title>TERAX PANEL</title>
  </head>
  <body>

    @if(session()->has('error'))
        <div id="error" class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif  

        @if(session()->has('success'))
        <div id="success" class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif 

    <form action="../user/save" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input name="id" value="{{$user->id}}" type="hidden">

                    <label for="name" class="mt-4">Имя</label>
                    <input id="name" required type="text" name='name' value="{{$user->username}}" class="form-control" placeholder="First name">

                    <label for="balance" class="mt-3">Баланс</label>
                    <input id="balance" type="number" required name="balance" value="{{$user->balance}}" class="form-control" placeholder="0" aria-describedby="button-addon">

                    <label for="password" class="mt-3">Пароль</label>
                    <input id="password" required name="password" type="text" class="form-control" placeholder="password" value="{{$user->password}}">

                    <button type="submit" class="mt-3 btn btn-success">Обновить информацию</button>
                </form>

</body>
</html> 