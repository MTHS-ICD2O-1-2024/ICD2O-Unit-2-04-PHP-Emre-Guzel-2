<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of triangle  " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Area of triangle </title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title"></span>
      </div>
    </header>
    <div class="container">
      <h3 class="dimatoins">Area of triangle </h3>
      <br>
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-of-triangle">
          <label class="mdl-textfield__label" for="sample2">Base of triangle in (cm)</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" name="height-of-triangle">
          <label class="mdl-textfield__label" for="sample3">Height of triangle (cm)</label>
        </div>
        <br>
        <main id="click-me " class="mdl-layout__content">
          <button id="click" type="submit"
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Calculate
          </button>
        </main>
      </form>
      <p>Area is: </p>

    </div>
    <br>
  </div>
  <img class="Calculate" src="images/area_of_trinagle.png" alt="Street">
</body>

</html>