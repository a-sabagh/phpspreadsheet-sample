<?php 

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\IOFactory;

$input_file = 'storage/members.xls';

$spreadsheet = IOFactory::load($input_file);
$sheet = $spreadsheet->getActiveSheet();
$rows = $sheet->toArray();


foreach($rows as $key => $value) {
    echo "KEY: {$key}<br>";
    var_dump($value);
    echo "VALUE<hr>";
}