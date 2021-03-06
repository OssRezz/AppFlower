<?php
require '../Modelo/ModeloReporte.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

//Style
$tableStyle = [
    'font' => [
        'color' => [
            'rgb' => 'FFFFFF'
        ],
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => [
            'rgb' => '366092'
        ]
    ],
];

$report = new Reporte();
$spreadsheet = new Spreadsheet();

if (strlen($_GET['desde']) > 0 and strlen($_GET['hasta']) > 0 and strlen($_GET['selectOption']) > 0 and strlen($_GET['semanaReport']) > 0) {
    $desde = $_GET['desde'];
    $hasta = $_GET['hasta'];
    $selectedOption = $_GET['selectOption'];
    $Week = $_GET['semanaReport'];

    $verDesde = date('d/m/Y', strtotime($desde));
    $verHasta = date('d/m/Y', strtotime($hasta));
}

$reporte = $spreadsheet->getActiveSheet();

$reporte->setTitle("Soporte Tallo");


//Posicion del titulo
$reporte->setCellValue('A1', 'Soporte Tallo');
if ($selectedOption === "1") {
    $reporte->setCellValue('E1', 'Fecha:');

    if ($verDesde === $verHasta) {
        $reporte->setCellValue('G1',  $verDesde);
    } else {
        $reporte->setCellValue('G1',  $verDesde . " Hasta: " .  $verHasta);
        $spreadsheet->getActiveSheet()->mergeCells("G1:H1");
    }
} else {
    $reporte->setCellValue('E1', 'Semana:');
    $reporte->setCellValue('H1',  $Week);
}


//Estilo del titulo
$spreadsheet->getActiveSheet()->mergeCells("A1:D1");
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getRowDimension("1")->setRowHeight(30);

//Campos de la cabecera
$reporte->setCellValue('A2', 'Fecha');
$reporte->setCellValue('B2', 'Semana');
$reporte->setCellValue('C2', 'Labor');
$reporte->setCellValue('D2', 'Codigo');
$reporte->setCellValue('E2', 'Operario');
$reporte->setCellValue('F2', 'Tiempo');
$reporte->setCellValue('G2', 'Tallos');
$reporte->setCellValue('H2', 'Rendimiento');



//Tama??o de las columnas 
$spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(30);
$spreadsheet->getActiveSheet()->getColumnDimension("F")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("G")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("H")->setWidth(20);


//Estilo negrilla, tama??o de letra, y fila
$spreadsheet->getActiveSheet()->getStyle('A2:H2')->getFont()->setSize(12);
$spreadsheet->getActiveSheet()->getStyle('A1:H1')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A2:H2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getRowDimension("2")->setRowHeight(30);

//Aplicamos nuestros colores del arreglo
$spreadsheet->getActiveSheet()->getStyle('A1:H1')->applyFromArray($tableStyle);
$spreadsheet->getActiveSheet()->getStyle('A2:H2')->applyFromArray($tableStyle);

$count = 3;
$labor = 4;

if ($selectedOption === "1") {
    $Reporte = $report->moduloProduccionFecha($labor,$desde, $hasta);
} else {
    $Reporte = $report->moduloProduccionSemana($labor,$Week);
}

if ($Reporte != null) {
    foreach ($Reporte as $rows) {
        $reporte->setCellValue('A' . $count, $rows['fecha']);
        $reporte->setCellValue('B' . $count, $rows['week']);
        $reporte->setCellValue('C' . $count, $rows['laborArmado']);
        $reporte->setCellValue('D' . $count, $rows['operario']);
        $reporte->setCellValue('E' . $count, $rows['nombre']);
        $reporte->setCellValue('F' . $count, $rows['hora']);
        $reporte->setCellValue('G' . $count, $rows['tallos']);
        $reporte->setCellValue('H' . $count, $rows['rendimiento']);

        $count++;
    }
} else {
    $reporte->setCellValue('A4', "No hay registros en las fechas seleccionadas");
}

//autofilter
//define first row and last row
$firstRow = 2;
$lasRow = $count - 1;
$spreadsheet->getActiveSheet()->setAutoFilter("A".$firstRow.":H".$lasRow);




header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="SoporteTallo_'.$desde.'.xls"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('php://output');
exit();
