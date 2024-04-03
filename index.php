<!DOCTYPE html>
<html>

<head>
  <title> Miles per hour to Kilometers per hour!</title>
  <!-- styles sheet for MDL -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
  <link rel="manifest" href="./favicon/site.webmanifest">
  <meta charset="UTF-8">
  <meta name="description" content="Assignment 2"">
      <meta name=" keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Dieg Valdivieso">
</head>

<body>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Miles per hour to Kilometers per hour!</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <table>
        <tr>
          <th>
            <h2>Formula</h2>
            <h3> Mph x 1.60 </h3>
            <h3></h3>
          </th>
        </tr>
      </table>
      <!-- Simple Textfield -->
      <h1><?php echo 'Miles per hours to Kilometers per hours'; ?></h1>
      <?php 
        $Mph = 100;  
        $KphConstant = 1.6; 
        echo "<p>Mph = $Mph <br>Constant = $KphConstant </p>"; ?>		
      <?php 
       echo "<p>The spped you are going in Kph $Mph  x $KphConstant = " . ($Mph * $KphConstant) . "</p>";  
        ?> 
     
      <center><img src="./images/Speedomiter.jpg" alt="Formula 1 track" width="500" height="330"></center>
    </main>
  </div>
</body>

</html>