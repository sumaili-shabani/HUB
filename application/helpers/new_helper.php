<?php defined('BASEPATH') OR exit('No direct script access allowed');
// generate pdf
function generate_pdf($name, $tpl, $data)
{
    $ci = &get_instance();
    $data['data'] = $data;
    $ci->load->view($tpl, $data);
    // Get output html
    $html = $ci->output->get_output();
// add external css library
    $html .= '<link href="' . base_url() . 'js/css/sb-admin-2.min.css" rel="stylesheet">';
    $html .= '<link href="' . base_url() . 'js/css/style.css" rel="stylesheet">';
    $html .= '<link href="' . base_url() . 'js/assets/fullcalendar/fullcalendar.min.css" rel="stylesheet">';
    $html .= '<link href="' . base_url() . 'js/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">';
    $html .= '<link href="' . base_url() . 'js/assets/font-awesome/css/font-awesome.css" rel="stylesheet">';
    // Load pdf library
    $ci->load->library('pdf');
    $ci->dompdf->loadHtml($html);
    // setup size
    $ci->dompdf->setPaper('A4', 'portrait');
    // Render the HTML as PDF
    $ci->dompdf->render();
    // Output  PDF (1 = download and 0 = preview)
    $ci->dompdf->stream($name, array("Attachment" => 0));
}
?>