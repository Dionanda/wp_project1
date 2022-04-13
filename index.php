<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Suhu</title>
  <link rel="stylesheet" type="text/css" href="styles/app.css">
</head>
<body>
  <!-- Update : Rapiin HTML -->
  <section class="wrapper">
    <div class="hero-container">
      <h1 class="hero-title">Konversi Suhu</h1>
      <h5 class="hero-description">Konversi :</h5>
    </div>
    <form class="form" action="convertion.php" method="post">
      <input id="inpcf" type="radio" name="konversi" value="Celcius">CELCIUS KE FAHRENHEIT
      <input id="inpfc" type="radio" name="konversi" value="Fahrenheit">FAHRENHEIT KE CELCIUS
      <br>
      <input id="inpns" type="text" name="suhu" placeholder="Nilai Suhu"><br>
      <button id="inpsb" type="submit" name="submit">Konversi</button><br>
    </form>
  </section>
</body>
</html> 