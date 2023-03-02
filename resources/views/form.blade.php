<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
</head>
<body>
  <form action="{{route('form_process')}}" method="POST">
    @csrf

    <input name = "name" type="text" placeholder ="Имя">
    <input type="password" type="password" placeholder="Пароль">
    <button type="submit">Отправить</button>
  </form>
</body>
</html>