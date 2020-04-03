<?php 
require 'vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\IOFactory;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpoffice-phpspreadsheet</title>
</head>
<body>
    <h3>Export memberships</h3>
    <a href="export.php" title="click to download">
        <button>Export</button>
    </a>
    <h3>Import Action</h3>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="excel"><br>
        <input type="submit" name="submit">
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $input_file = $_FILES['excel']['tmp_name'];
        $spreadsheet = IOFactory::load($input_file);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();
        echo '<pre>';
        var_dump($rows);
        echo '</pre>';
    }
    ?>
</body>
</html>