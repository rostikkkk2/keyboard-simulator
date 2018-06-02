<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="script.js"></script>
    <title>main</title>
  </head>
  <body>
    <div class="">
      <h1 class="text-center"><?= $_POST["difficulty"]; ?></h1>
    </div>
    <br>
    <div class="text-center">
      <p class="text" id="text">Lorem ipsum dolor sit amet,<br> consectetur adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.<br> Ut i officia deserunt mollit laborum.</p>
    </div>
    <br><br>
    <div class="text-center mist">
      <p><textarea class="textarea" id="user_text" rows="4" cols="60" name="text"></textarea></p>
      <p class="green">Набрано</p> <span class="green" id="press_symbols">0</span>/<span id="length"></span>
      <p class="mistakes">Ошибок</p> <span class="mistakes" id="mistakes">0</span>
    </div>
  </body>
</html>
