<?php
require_once "global.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <?php
  require_once "meta.php";
  ?>
</head>

<?php
require_once "toolbar.php";
?>


<?php
require_once "script.php";
?>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<body>
</body>

</html>