<!DOCTYPE html>
<html>
  <head>

    <title>Progetto Informatica</title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  </head>

  <body>
    <header>
      <div class="navbar">
        <a class="login"href="login/login.html">Login</a>
        <a class="login"href="login/newuser/newuser.html">Register</a>
      </div>
    <div class="title">Weather Compare</div><hr>
    <h2>Compare weather forecast between different weather providers</h2>

  </header>

    <main>


    <div class="city">

        <form class="box" action="results.php" method="post">
            <input type="text" name="city" placeholder="City"> <br><br>
        </form>
    </div><br><br>

    <div class="sub">
      Type in the city you want to compare then hit ENTER.
    </div>

  </main>

  </body>

</html>
