<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Password_generator</title>
</head>

<body>

  <h1>STRONG PASSWORD GENERATOR</h1>
  <h2>Genera una password sicura</h2>


  <form method="POST">
    <label for="lpass">Lunghezza Password</label>
    <input type="text" name="pass">
    <input type="submit" value="GENERA">
  </form>

  <h1>

    <?php
    $lunghezza = $_POST['pass'];

    function generaPass($lunghezza)
    {
      $caratteriPossibli = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      $stringa = "";
      $i = 0;
      while ($i < $lunghezza) {
        $carattere = substr($caratteriPossibli, rand(0, strlen($caratteriPossibli) - 1), 1);
        if (!strstr($stringa, $carattere)) {
          $stringa .= $carattere;
          $i++;
        }
      }
      return $stringa;
    }

    echo generaPass($lunghezza);
    ?>

  </h1>



</body>

</html>