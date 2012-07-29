<?php
namespace TFox\Bundle\MpdfPortBundle\Factories;

include_once __DIR__.'/../mpdf/mpdf.php';


class MPdfFactory {
	public function getMPdf() {
		$mpdf = new \mPDF('utf-8', 'A4');
		return $mpdf;
	}
}