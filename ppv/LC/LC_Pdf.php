<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            ob_start();
            require('../fpdf/fpdf.php');
            require('connection.php');
            global $conn;
            if (isset($_POST['id'])):
                $id = $_POST['id'];
                $result = $conn->query("select * from floor inner join f_picture on floor.id = f_picture.id_floor and floor.id = '$id' order by floor.id;");
                while ($row = mysqli_fetch_array($result)):
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->SetFont('Arial', 'B', 14);
                    /*
                    $pdf->Image($img,120,10,80,80,'JPG','http://localhost/Ralph_Laguna_RA3_ES/views/LC_Pdf.php');
                    $pdf->Image('floor2.jpg',120,92,80,80,'JPG','http://localhost/Ralph_Laguna_RA3_ES/views/PPV/LC_Pdf.php');*/
                    $pdf->Cell(100, 200, $row[1]);
                    $pdf->Write(5,"Numero de habitaciones: ".$row[2]);
                    $pdf->Ln();
                    $pdf->Write(5,"Numero de banios: ".$row[4]);
                    $pdf->Ln();
                    $pdf->Write(5,"Precio: ".$row[3]);
                    $pdf->Ln();
                    $pdf->Write(5,"Metros cuadrados: ".$row[5]);
                    $pdf->Ln();
                    $pdf->Write(5,"Estado del piso: ".$row[6]);
                    $pdf->Ln();
                    $pdf->Write(5,"Tipo de calefaccion: ".$row[7]);
                    $pdf->Ln();
                    $pdf->Write(5,"Esta amueblado: ".($row[8]?"Si":"No"));
                    $pdf->Ln();
                    $pdf->Write(5,"Distancia del piso al colegio Montessori: ".$row[9]."Km");
                    $pdf->Ln();
                    $pdf->Write(5,"Contacto: ".$row[10]);
                    $pdf->Ln();
                    $pdf->Write(5,"Estado de venta: ".($row[11]=="rent"?"Renta":"Venta"));
                    $pdf->Ln();
                    $pdf->Write(5,"Tipo de piso: ".$row[12]);
                    $pdf->Output();
                endwhile;
            endif;
        ?>
    </body>
</html>
