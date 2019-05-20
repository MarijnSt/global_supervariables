<!DOCTYPE html>
<html>
  <head>
    <title>Global Supers</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
  </head>
  <body>
    <main>
        <form id="post" action="result.php" method="post">
          <div id="shows">
            <h2>What are your 5 favourite TV shows?</h2>
            <label for="tv1">Number one:
              <input id="tv1" type="text" name="tv1" value="" placeholder="#1">
            </label>
            <label for="tv2">Number two:
              <input id="tv2" type="text" name="tv2" value="" placeholder="#2">
            </label>
            <label for="tv3">Number three:
              <input id="tv3" type="text" name="tv3" value="" placeholder="#3">
            </label>
            <label for="tv4">Number four:
              <input id="tv4" type="text" name="tv4" value="" placeholder="#4">
            </label>
            <label for="tv5">Number five:
              <input id="tv5" type="text" name="tv5" value="" placeholder="#5">
            </label>
          </div>
          <div id="movies">
            <h2>What are your 5 favourite movies?</h2>
            <label for="movie1">Number one:
              <input id="movie1" type="text" name="movie1" value="" placeholder="#1">
            </label>
            <label for="movie2">Number two:
              <input id="movie2" type="text" name="movie2" value="" placeholder="#2">
            </label>
            <label for="movie3">Number three:
              <input id="movie3" type="text" name="movie3" value="" placeholder="#3">
            </label>
            <label for="movie4">Number four:
              <input id="movie4" type="text" name="movie4" value="" placeholder="#4">
            </label>
            <label for="movie5">Number five:
              <input id="movie5" type="text" name="movie5" value="" placeholder="#5">
            </label>
          </div>
          <button type="submit" name="submitPost">Verzenden</button>
        </form>

        <form id="get" action="result.php" method="get">
          <h2>Bonus questions</h2>
          <label for="country">What is your favourite country?
            <input id="country" type="text" name="country" value="" placeholder="The best country is...">
          </label>
          <label for="worstMovie">What's the worst movie you ever saw?
            <input id="worstMovie" type="text" name="worstMovie" value="" placeholder="The worst movie is...">
          </label>
          <button type="submit" name="submitGet">Verzenden</button>
        </form>
    </main>
  </body>
</html>
