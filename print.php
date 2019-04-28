<?php  
 function fetch_data()  
 {  
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "timetable");  
      $sql = "SELECT * FROM country_state_city_save";  
      $result = mysqli_query($conn, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr >  
                          <td style="background-color: #0000ff;color:#ffffff">'.$row["Day"].'</td>  
                          <td>'.$row["state"].'</td>  
                          <td style="background-color: #0000ff;color:#0000FF">'.$row["2nd"].'</td>  
                          <td>'.$row["3rd"].'</td>  
                          <td style="background-color: #0000ff;color:#0000FF">'.$row["1:00-2:00"].'</td> 
                          <td>'.$row["2:00:4:00"].'</td>
                          <td style="background-color: #0000ff;color:#0000FF">'.$row["4:00-4:30"].'</td> 
                          <td>'.$row["4:30-6:30"].'</td>
                          <td>'.$row["6:30-8:30"].'</td>
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  

      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Kenya Institute of Mass Communication  School Timetable for Computer LAB 1");
       $obj_pdf->SetTitle("Kenya Institute of Mass Communication  School Timetable for Computer LAB 1");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(2, '50', 2);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  

      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage('L', 'A4'); 
      $obj_pdf->setJPEGQuality(75);

      // Example of Image from data stream ('PHP rules')
//$imgdata = base64_decode('iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABlBMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDrEX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==');

// The '@' character is used to indicate that follows an image data stream and not an image file name
//$obj_pdf->Image('@'.$imgdata);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// Image example with resizing



      $content = '';  
      $obj_pdf->Image('images/image_demo.jpg', 99, 10, 95, 40, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 0, false, false, false);
      $content .= '  
      <h4 align="center">Kenya Institute of Mass Communication </h4> 
     <h4 align="center">Computer Lab One Timetable</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3" align="center">  
           <tr style="background-color:#0000ff;color:#ffffff">  
                <th >Day</th>  
                <th >8:30-10:30</th>  
                <th >Break</th>  
                <th >11:00-1:00</th>  
                <th >Lunch</th>
                <th >2:00-4:00</th>
                <th >Break</th>
                <th >4:30-6:30</th>
                <th >6:30-8:30</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>lab pdf</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>  
           <br />
           <div class="container">  
                <h4 align="center">Kenya Institute of Mass Communication</h4><br />  
                <div class="table-responsive">  
                	<div class="col-md-12" align="right">
                     <form method="post">  
                          <input type="submit" name="generate_pdf" class="btn btn-success" value="Generate PDF" />  
                     </form>  
                     </div>
                     <br/>
                     <br/>
                     <table  class="table table-bordered">  
                          <tr  style="background-color:#0000ff;color:#ffffff">  
                               <th ><b>Day</b></th>  
                               <th >8:30-10:30</th>  
                               <th >Break</th>  
                               <th >11:00-1:00</th>  
                               <th >Lunch</th> 
                               <th >2:00-4:00</th> 
                               <th >Break</th> 
                               <th >4:30-6:30</th> 
                               <th >6:30-8:30</th> 
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  