<html>

<head>

  <title>Login
  </title>

  <link href="../../css/login.css" rel="stylesheet" type="text/css" />
  <link href="../../css/main.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <?php include 'insert_user.php' ?>

  <header>
    <div class="title">Weather Compare</div>
    <hr>
    <h2>You register was succesfull!</h2>
  </header>
  <main>

    <form id="login" action="../verify.php" method="post">
      <fieldset id="inputs">
        <input id="username" name="email" type="text" placeholder="Username" autofocus required>
        <input id="password" name="password" type="password" placeholder="Password" required>
      </fieldset>
      <fieldset id="actions">
        <input type="submit" id="submit" value="Collegati">
        <a href="../../index.php" id="back">Return to WeatherCompare</a>
    </form>
  </main>

</body>

</html>
