<?php
namespace TFox\Bundle\MpdfPortBundle\Factories;

include_once __DIR__.'/../mpdf/mpdf.php';


class MPdfFactory {
	public function getMPdf($mode = '', $format = 'A4', $default_font_size = 0, $default_font = '', $mgl = 15, $mgr = 15, $mgt = 16, $mgb = 16, $mgh = 9, $mgf = 9, $orientation = 'P') {
		$mpdf = new \mPDF($mode, $format, $default_font_size, $default_font, $mgl, $mgr, $mgt, $mgb, $mgh, $mgf, $orientation);
		return $mpdf;
	}
}
