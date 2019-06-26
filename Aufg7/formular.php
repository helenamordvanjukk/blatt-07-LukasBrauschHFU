<html>
<body>
<?php $name = $_GET["name"];?>
<?php $address = $_GET["address"];?>
<?php $matriculation_number = $_GET["matriculation_number"];?>
<?php $password = $_POST["password"];?>

Welcome <?php echo $_GET["name"]; ?><br>
Your address is: <?php echo $_GET["address"]; ?><br>
Your matriculation number is: <?php echo $_GET["matriculation_number"]; ?><br>


<?php
$document = array($name, $address, $matriculation_number, $password);
    $file = fopen("document.csv", "w");
    fputcsv($file, $document);
    fclose($file);
    ?>
</body>
</html>