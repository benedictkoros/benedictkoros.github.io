<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('config/tcpdf_config.php');
require_once('tcpdf.php');
// create new PDF document
class MYPDF extends TCPDF {

    // Load table data from file
    public function LoadData() {
        // Read file lines
       $conn=mysqli_connect("localhost","root","","timetable");
           if($conn-> connect_error){
              die("Connection failed:".$conn-> connect_error);
              }
            $sql = "SELECT * FROM computer_lab_2 WHERE country=1";
             $result=$conn-> query($sql);
             if ($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["Day"] . "</td><td >" . $row["state"] . "</td><td bgColor= #737373>" . $row["2nd"] . "</td><td>" . $row["3rd"] . "</td><td bgColor= #737373>". $row["1:00-2:00"] . "</td><td>". $row["2:00:4:00"] . "</td><td bgColor= #737373>" . $row["4:00-4:30"] . "</td><td>". $row["4:30-6:30"] . "</td><td>". $row["6:30-8:30"]."</td> </tr>";
              }
              
             }
          

           else{
            echo "No booking records available";
           }

        $conn->close();
        }
        
    

    // Colored table
    public function ColoredTable($header,$data) {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(0.3);
        $this->SetFont('', 'B');
        // Header
        $w = array(40, 35, 40, 45,50,60,30,20,28);
        $num_headers = count($header);
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = 0;
        foreach($data as $row) {
            $this->Cell($w[0], 6, $row['Day'], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row['2nd'], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, $row['3rd'], 'LR', 0, 'L', $fill);
            $this->Cell($w[3], 6, $row['2:00:4:00'], 'LR', 0, 'L', $fill);
            $this->Cell($w[6], 6, number_format($row['4:30-6:30']), 'LR', 0, 'R', $fill);
            $this->Cell($w[7], 6, number_format($row['6:30-8:30']), 'LR', 0, 'R', $fill);
            $this->Ln();
            $fill=!$fill;
        }
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Computer lab One');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// column titles
$header = array('Day', '2nd', '3rd', '2:00:4:00','4:30-6:30','6:30-8:30');

// data loading
$data = $pdf->LoadData();
//print_r($data);exit;
 print colored table
$pdf->ColoredTable($header, $data);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output('lab_one.pdf', 'I');

//============================================================+
// END OF FILE
//==============================================
?>