
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.iconarchive.com/download/i63359/cornmanthe3rd/plex/Media-illustrator.ico">

    <title>Best encoder</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/signin/">

    <!-- Bootstrap core CSS -->
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://v4-alpha.getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h5 >Шифрування</h5>
        
        <input type="text" class="form-control" placeholder="Введіть ваш текст" required autofocus>
        <input type="text" class="form-control" placeholder="Введіть ключ">
        <div class="radio">
            <label>
                <input type="radio" name="optradio">Шифрування по циферці
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optradio">Шифрування по слову
            </label>
        </div>
        <div class="radio">
            
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зашифрувати</button>

        <h5 style="color:red">Тут буде зашифрований текст</h5>
      </form>
    
    </div>
    <hr></hr> 
    <div class="container">

      <form class="form-signin">
        <h5>Дешифрування</h5>
        
        <input type="text" class="form-control" placeholder="Введіть ваш текст" required autofocus>
        <input type="text" class="form-control" placeholder="Введіть ключ">
        <div class="radio">
            <label>
                <input type="radio" name="optradio">Дешифрування по циферці
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="optradio">Дешифрування по слову
            </label>
        </div>
        <div class="radio">
            
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Дешифрувати</button>

        <h5 style="color:red">Тут буде дешифрований текст</h5>
      </form>

    </div> 



  </body>
</html>