<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>nFood</title>
  <link href="styles.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 logoBlock">
                    <a class = "logo" href="index.php"><img src="img/icons/logo.png"></a>
                </div>
                <div class="col-4 title">
                  nЕда
                </div>
                <div class="col-4 registrationBlock">
                    <a onclick="regPage()" class = "activeUnit"><div class="registrationUnit">
                        Регистрация
                    </div>
                    </a>
                    <a onclick="authPage()" class = "activeUnit"><div class="registrationUnit">
                        Авторизация
                    </div>
                    </a>
                </div>
              </div>
              <div class = "menu">
                <div class="row justify-content-around">
                    <div class="col-sm menuItem mh-100">
                        Главная
                    </div>
                    <div class="col-sm menuItem">
                        Список категорий
                    </div>
                    <div class="col-sm menuItem">
                        Контакты
                    </div>
                    <div class="col-sm menuItem">
                        Новости
                    </div>
                    <div class="col-sm menuItem">
                        Самые популярные товары
                    </div>
                  </div>
              </div>
          </div> 
    </div>
    <div class = "wrapper">
        <div class = "itemGood">
            <div class ="goodimg"></div>
            <div class ="goodname"></div>
        </div>
    </div>
</body>
</html>