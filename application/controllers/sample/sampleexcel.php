<?php
/**
 * Class Sampleexcel
 */
class Sampleexcel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->downloadExcel();
	}

	private function downloadExcel()
	{
		$this->load->library("phpexcel");

		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();
		// Set properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
			->setLastModifiedBy("Maarten Balliauw")
			->setTitle("Office 2007 XLSX Test Document")
			->setSubject("Office 2007 XLSX Test Document")
			->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
			->setKeywords("office 2007 openxml php")
			->setCategory("Test result file");

		// Add some data
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A1', mb_convert_encoding('日本語','UTF-8', mb_internal_encoding()))
			->setCellValue('B2', mb_convert_encoding('テストです。','UTF-8', mb_internal_encoding()))
			->setCellValue('C1', mb_convert_encoding('文字エンコード','UTF-8', mb_internal_encoding()))
			->setCellValue('D2', mb_convert_encoding('EUCなんですけど','UTF-8', mb_internal_encoding()));

		// Miscellaneous glyphs, UTF-8
		$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A4', 'Miscellaneous glyphs')
			->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

		// Rename sheet
		$objPHPExcel->getActiveSheet()->setTitle('Simple');

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="01simple.xls"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit;
	}

}