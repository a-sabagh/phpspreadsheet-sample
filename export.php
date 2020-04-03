<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A1', 'Full Name')
        ->setCellValue('B1','Education')
        ->setCellValue('C1','Job')
        ->setCellValue('A2','Abolfazl Sabagh')
        ->setCellValue('B2','Software Engineer')
        ->setCellValue('C2','Web Developer');

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="members.xls"');

$writer = IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('php://output');