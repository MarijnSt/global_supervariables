<!DOCTYPE html>
<html>
  <head>
    <title>Global Supers</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
  </head>
  <body>
    <main>
      <?php
        //shows en films
        if (isset($_POST['submitPost'])) {
          echo ("<h2>These are your favourite shows:</h2>");
          echo ("<p>1. " . $_POST['tv1'] . "</p>");
          echo ("<p>2. " . $_POST['tv2'] . "</p>");
          echo ("<p>3. " . $_POST['tv3'] . "</p>");
          echo ("<p>4. " . $_POST['tv4'] . "</p>");
          echo ("<p>5. " . $_POST['tv5'] . "</p>");

          echo ("<h2>These are your favourite movies:</h2>");
          echo ("<p>1. " . $_POST['movie1'] . "</p>");
          echo ("<p>2. " . $_POST['movie2'] . "</p>");
          echo ("<p>3. " . $_POST['movie3'] . "</p>");
          echo ("<p>4. " . $_POST['movie4'] . "</p>");
          echo ("<p>5. " . $_POST['movie5'] . "</p>");
        }

        //extra vragen
        if(isset($_GET['submitGet'])) {
          echo ("<h2>Your favourite country is:</h2>");
          echo ("<p>" . $_GET['country'] . "</p>");

          echo ("<h2>The worst movie you ever saw was:</h2>");
          echo ("<p>" . $_GET['worstMovie'] . "</p>");
        }

        //Login
        $user = "marijn";
        $ww = "marijniscool";

        if(isset($_POST['login'])){
          $userinput = $_POST['username'];
          $wwinput = $_POST['password'];

          $usercorrect = 0;
          $wwcorrect = 0;

          //user controleren
          if (strlen($userinput) === strlen($user)){
            for ($i=0; $i < strlen($userinput) ; $i++) {
              if ($userinput[$i] === $user[$i]){
                $usercorrect++;
              }
            }
          }

          //ww controleren
          if (strlen($wwinput) === strlen($ww)){
            for ($j=0; $j < strlen($wwinput) ; $j++) {
              if ($wwinput[$j] === $ww[$j]){
                $wwcorrect++;
              }
            }
          }

          if ($usercorrect !== strlen($userinput)){
            echo ("<h2>Wrong username</h2><h2>Try again.</h2>");
          } else if ($wwcorrect !== strlen($wwinput)){
            echo ("<h2>Wrong password</h2><h2>Try again.</h2>");
          } else {
            echo ("<h2>Hallo " . $user . "</h2>");
          }
        }
      ?>
    </main>
  </body>
</html>
