<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body class="container">
    <form action="Rekenmachine.php" method="post">
        <label for="getal1"></label>
            <input id="getal1" required type="number" name="getal1" placeholder="getal1">
        <label for="symbool"></label>
            <select id="symbool" name="symbool">
                <option value="+" name="plus">+</option>
                <option value="-" name="min">-</option>
                <option value="/" name="delen">/</option>
                <option value="*" name="keer">*</option>
            </select>
        <label for="getal2"></label>
            <input id="getal2" required type="number" name="getal2" placeholder="getal2">
        <input type="submit" value="=" name="submit">
    </form>

<div>
    <?php
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    $symbool = $_POST['symbool'];

       function rekenen($getal1, $getal2, $symbool){

           switch ($symbool){
               case "+":
                   echo"Je som is: " . $getal1 . "+" . $getal2 . "=" . ($getal1+$getal2);
                   break;
               case "-":
                   echo"Je som is: " . $getal1 . "-" . $getal2 . "=" . ($getal1-$getal2);
                   break;
               case "/":
                   echo"Je som is: " . $getal1 . "/" . $getal2 . "=" . ($getal1/$getal2);
                   break;
               case "*":
                   echo"Je som is: " . $getal1 . "*" . $getal2 . "=" . ($getal1*$getal2);
                   break;
               default:
                   echo 'Niks gebeurt';
                   break;
           }
    }
    rekenen($getal1, $getal2,$symbool);
    ?>
</div>
    <!--Bootstrap js-->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/npm.js"></script>
</body>
</html>