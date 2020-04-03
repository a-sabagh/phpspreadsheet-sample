<?php
require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Abolfazl Sabagh');
$sheet->setCellValue('A3','Computer Engineer');

$writer = new Xlsx($spreadsheet);
$writer->save('storage/sample1.xlsx');