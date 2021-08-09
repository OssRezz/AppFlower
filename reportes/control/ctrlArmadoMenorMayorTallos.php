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
$reporte->setTitle("Reporte Armado");

//Posicion del titulo
$reporte->setCellValue('A1', 'Tallos de mayor a menor armado');
$reporte->setCellValue('H1', 'fecha:');

if ($selectedOption === "1") {
    $reporte->setCellValue('H1', 'Fecha:');
    $reporte->setCellValue('I1',  $verDesde);

} else {
    $reporte->setCellValue('H1', 'Semana:');
    $reporte->setCellValue('I1',  $Week);
}


//Estilo del titulo
$spreadsheet->getActiveSheet()->mergeCells("A1:G1");
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getRowDimension("1")->setRowHeight(30);

//Campos de la cabecera
$reporte->setCellValue('A2', 'Labor');
$reporte->setCellValue('B2', 'Codigo');
$reporte->setCellValue('C2', 'Nombre');
$reporte->setCellValue('D2', 'Fecha');
$reporte->setCellValue('E2', 'Semana');
$reporte->setCellValue('F2', 'Tiempo');
$reporte->setCellValue('G2', 'Tallos');
$reporte->setCellValue('H2', 'Recetas');
$reporte->setCellValue('I2', 'Promedio');

//Tamaño de las columnas 
$spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(30);
$spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(13);
$spreadsheet->getActiveSheet()->getColumnDimension("F")->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension("G")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("H")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("I")->setWidth(15);

//Estilo negrilla, tamaño de letra, y fila
$spreadsheet->getActiveSheet()->getStyle('A2:I2')->getFont()->setSize(12);
$spreadsheet->getActiveSheet()->getStyle('A1:I1')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A2:I2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getRowDimension("2")->setRowHeight(30);

//Aplicamos nuestros colores del arreglo
$spreadsheet->getActiveSheet()->getStyle('A1:I1')->applyFromArray($tableStyle);
$spreadsheet->getActiveSheet()->getStyle('A2:I2')->applyFromArray($tableStyle);

if ($selectedOption === "1") {
    $labor = 1;
    $Reporte = $report->produccionTallosMenorMayor($labor,$desde, $hasta);
} else {
    $labor = 1;
    $Reporte = $report->produccionTallosMenorMayorSemana($labor,$Week);
}

$count = 3;
if ($Reporte != null) {
    foreach ($Reporte as $rows) {
        $reporte->setCellValue('A' . $count, $rows['Labor']);
        $reporte->setCellValue('B' . $count, $rows['operario']);
        $reporte->setCellValue('C' . $count, $rows['nombre']);
        $reporte->setCellValue('D' . $count, $rows['fecha']);
        $reporte->setCellValue('E' . $count, $rows['Semana']);
        $reporte->setCellValue('F' . $count, $rows['hora']);
        $reporte->setCellValue('G' . $count, $rows['tallos']);

        $recetas = $rows['recetas'];
        $Separador = str_replace("+", ',', $recetas);
        $numeroRecetas = preg_split("/\,/", $Separador);
        $numeroRecetas = count($numeroRecetas);

        $reporte->setCellValue('H' . $count, $numeroRecetas);
        $reporte->setCellValue('I' . $count, $rows['Promedio']);
        $count++;
    }
} else {
    $reporte->setCellValue('A' . $count+1, "No hay registros en las fechas seleccionadas");
}

//autofilter
//define first row and last row
$firstRow=2;
$lasRow= $count-1;
$spreadsheet->getActiveSheet()->setAutoFilter("A".$firstRow.":I".$lasRow);



header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte_armado_tallos.xls"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('php://output');
