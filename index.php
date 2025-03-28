<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapizoid " />
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
  <title>Area of Trapizoid </title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapizoid</span>
      </div>
    </header>
    <h2 class="formula">Formula</h2>
    <p class="">A[(a + b)/2]xh</p>
    <h3 class="dimatoins"> Please enter the base and height in cm </h3>
    <br>
    <form action="answer.php" method="GET">
      <div class="mdl-textfield mdl-js-textfield" id="base-a">
        <p class="base-a"> Base A</p>
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-a-of-trapizoid">
        <label class="mdl-textfield__label" for="base-a-of-trapizoid"></label>
        <span>mm</span>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <div class="mdl-textfield mdl-js-textfield" id="base-b">
        <p class="base-a"> Base B</p>
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="base-b-of-trapizoid">
        <label class="mdl-textfield__label" for="base-b-of-trapizoid"></label>
        <span>mm</span>
        <br>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <div class="mdl-textfield mdl-js-textfield" id="height">
        <p class="base-a"> Height</p>
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-the-trapizoid">
        <label class="mdl-textfield__label" for="height-of-the-trapizoid"></label>
        <span>mm</span>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
      <br>
      <main id="click-me " class="mdl-layout__content">
        <button id="click" type="submit" onclick="calculatoinOfAreaOfTrapizoid()"
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
          Enter
        </button>
      </main>
    </form>
    <p id="area">Area is: </p>

  </div>
  <br>
  <img class="Calculate" src="images/trapezoid.svg" alt="Formula of rectengle">
</body>

</html>
