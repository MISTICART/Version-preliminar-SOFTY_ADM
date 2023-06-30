<?php
include_once "../../../../Iniciar_Sesion/conexion.php";
include_once '../../../../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = $_POST['sql'];
    $title = "TABLA DE USUARIOS ADM";

    $result = $conex->query($sql);

    if ($result && $result->num_rows > 0) {
        $filename = 'Tabla_Usuarios_ADM.xlsx';
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', $title);
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->mergeCells('A1:G1');

        $rowNumber = 3;
        while ($row = $result->fetch_assoc()) {
            $column = 'A';
            foreach ($row as $value) {
                $sheet->setCellValue($column . $rowNumber, $value);
                $column++;
            }
            $rowNumber++;
        }

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save($filename);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        exit;
    } else {
        echo "<p>NO SE ENCONTRARON REGISTROS PARA DESCARGAR</p>";
    }

    $result->free();
    $conex->close();
}
?>
