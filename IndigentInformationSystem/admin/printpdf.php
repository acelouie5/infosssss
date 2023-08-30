



<?php

if (isset($_POST["generate_pdf"])) {
    require_once('tcpdf/tcpdf.php');




    // Create a new TCPDF instance
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    // Set document information
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Indigent Information");
    
    // Set fonts and margins
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('Arial');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(true, 10);
    $obj_pdf->SetFont('helvetica', '', 11);
    
    // Add a page
    $obj_pdf->AddPage();
    
    // Build the content
    $content = '<h4 align="center">Indigent Information Report</h4><br />';
    $content .= '<table border="1" cellspacing="0" cellpadding="3">';
    $content .= '<tr>';
    $content .= '<th width="30%">Fullname</th>';
    $content .= '<th width="50%">Assistance Needed</th>';
    $content .= '<th width="20%">Date</th>';
    $content .= '</tr>';
    
    // Fetch and add data to the content
    $content .= fetch_data();
    
    $content .= '</table>';
    
    // Write HTML content to the PDF
    $obj_pdf->writeHTML($content);
    
    // Output the PDF
    $obj_pdf->Output('report.pdf', 'I');
}



function fetch_data()
{

    include('../db/dbconfig.php');
    $sql = "
    SELECT 
        s.`s_id`, 
        s.`solicitor_id`, 
        s.`lastname_solicitor`, 
        s.`firstname_solicitor`, 
        s.`middlename_solicitor`, 
        s.`suffix`, 
        a.`interview_status`,
        a.`aid`, 
        a.`assistance_ID`, 
        a.`assistance_needed`, 
        a.`reqdate`
    FROM 
        `tblassistance_solicitor` AS s
    INNER JOIN 
        `tbl_assistance` AS a
    ON 
        s.`s_id` = a.`s_id`
";

}
?>
