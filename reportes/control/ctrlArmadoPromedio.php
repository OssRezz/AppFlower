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

//Formateamos la fecha
if (strlen($_GET['desde']) > 0 and strlen($_GET['hasta']) > 0) {
    $desde = $_GET['desde'];
    $hasta = $_GET['hasta'];

    $verDesde = date('d/m/Y', strtotime($desde));
    $verHasta = date('d/m/Y', strtotime($hasta));
}


$reporte = $spreadsheet->getActiveSheet();
$reporte->setTitle("Reporte Armado");

//Posicion del titulo
$reporte->setCellValue('A1', 'Promedio de armado');
$reporte->setCellValue('D1', 'fecha:');
$reporte->setCellValue('E1',  $verDesde);

//Estilo del titulo
$spreadsheet->getActiveSheet()->mergeCells("A1:C1");
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getRowDimension("1")->setRowHeight(30);

//Campos de la cabecera
$reporte->setCellValue('A2', 'Labor');
$reporte->setCellValue('B2', 'Nombre');
$reporte->setCellValue('C2', 'Tiempo');
$reporte->setCellValue('D2', 'Tallos');
$reporte->setCellValue('E2', 'Promedio');


//Tamaño de las columnas 
$spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(20);
$spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(30);
$spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(15);


//Estilo negrilla, tamaño de letra, y fila
$spreadsheet->getActiveSheet()->getStyle('A2:E2')->getFont()->setSize(12);
$spreadsheet->getActiveSheet()->getStyle('A1:E1')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A2:E2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getRowDimension("2")->setRowHeight(30);

//Aplicamos nuestros colores del arreglo
$spreadsheet->getActiveSheet()->getStyle('A1:E1')->applyFromArray($tableStyle);
$spreadsheet->getActiveSheet()->getStyle('A2:E2')->applyFromArray($tableStyle);

$count = 3;
$id = 1;
$Reporte = $report->ProduccionPromedio($id,$desde, $hasta);
if ($Reporte != null) {
    foreach ($Reporte as $rows) {
        $reporte->setCellValue('A' . $count, $rows['Labor']);
        $reporte->setCellValue('B' . $count, $rows['nombre']);
        $reporte->setCellValue('C' . $count, $rows['hora']);
        $reporte->setCellValue('D' . $count, $rows['tallos']);
        $reporte->setCellValue('E' . $count, $rows['Promedio']);
        $count++;
    }
} else {
    $reporte->setCellValue('A' . $count+1, "No hay registros en las fechas seleccionadas");
}

//autofilter
//define first row and last row
$firstRow=2;
$lasRow= $count-1;
$spreadsheet->getActiveSheet()->setAutoFilter("A".$firstRow.":E".$lasRow);



header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="reporte_armado_promedio.xls"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('php://output');
