<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('DOMPDF_ENABLE_AUTOLOAD', false);
require_once("./vendor/autoload.php");

class dompdf_gen2 {

public function generate($html, $filename='', $stream=TRUE, $paper = 'A4', $orientation = "landscape")
{
  $dompdf->set_paper($paper_size, $orientation);
  
  $dompdf->load_html($html);
  $dompdf->set_paper($paper, $orientation);
  $dompdf->render();
  if ($stream) {
      $dompdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0));
  } else {
      return $dompdf->output();
  }
}
}