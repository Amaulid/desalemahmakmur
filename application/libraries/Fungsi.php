<?php

Class Fungsi {

	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}

	function PdfGenerator($html, $filename, $paper, $orientation)
        {
            $dompdf = new Dompdf\Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('$papper', '$orientation');
            $dompdf->render();
            $dompdf->stream($filename, array('Attachment' => 0));
        }
    }