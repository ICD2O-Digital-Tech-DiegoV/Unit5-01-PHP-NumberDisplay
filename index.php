<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Museum Admission" />
  <meta name="keywords" content="immaculata, ics2o" />
  <meta name="author" content="Diego" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="180x180" href="./fav)/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
  <link rel="manifest" href="./fav/site.webmanifest" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Loops</title>
</head>

<body>
  <!-- references javascript file -->
  <script src="./js/script.js"></script>
  <h1>Number ranges</h1>
  <div id="backdrop">
    <h3>Enter a range of numbers:</h3>
    <p>
      <!-- form to get user input for their age, as well as the day of the week through a dropdown menu, which will help determine whether they are elegible for a discount or free entry -->
    <form action="javascript:museumAdmission()">
      <label for="Max">Max:</label>
      <!-- input for age -->
      <input type="number" id="max" min="0" step="1" placeholder="age" /><br><br>
      <label for="Min">Min:</label>
      <!-- input for age -->
      <input type="number" id="min" min="0" step="1" placeholder="age" /><br><br>
      <input type="submit" value="Check" />
    </form>
    </p>
    <!-- Create a space where the user information will be displayed -->


    <div id="user-info"></div>
    <img src="./images/loops.img" alt="slug" width="600" height="300" />
  </div>
  <br>
</body>

</html>