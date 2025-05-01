<!DOCTYPE html>
<!-- ICS2O-Unit5-05-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Find the triangle, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Find the triangle, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Find the triangle, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Triangles.png" alt="triangles" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          //input
          $lengthA = $_GET["sideA"];
          $lengthB = $_GET["sideB"];
          $lengthC = $_GET["sideC"];

          $angleA = acos(($lengthB ** 2 + $lengthC ** 2 - $lengthA ** 2) / (2 * $lengthB * $lengthC)) * (180 / pi());
          $angleB = acos(($lengthC ** 2 + $lengthA ** 2 - $lengthB ** 2) / (2 * $lengthC * $lengthA)) * (180 / pi());
          $angleC = acos(($lengthA ** 2 + $lengthB ** 2 - $lengthC ** 2) / (2 * $lengthA * $lengthB)) * (180 / pi());

          // Sum of the angles
          $sumOfAngles = $angleA + $angleB + $angleC;

          // process
          if (($sumOfAngles - 180 < 0.01) && ($sumOfAngles - 180 > -0.01)) {
            // process
            if (($angleA == $angleB) && ($angleA == $angleC)) {
              // output
              echo "This is an equilateral triangle!";
          }

            // process
            else if (($angleA == $angleB) || ($angleA == $angleC) || ($angleB == $angleC)) {
              // output
              echo "This is an isosceles triangle!";
          }

            // process
            else {
              echo "This is a scalene triangle!";
            }
          }

          // process
          else {
            //output
            echo "This is not a triangle!";
          }
          ?>
          <div class="page-content-answer">
            <a href="./index.php">Return</a>
          </div>
        </div>
    </main>
  </div>
</body>

</html>