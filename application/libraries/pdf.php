<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

# include TCPDF
require_once(APPPATH.'third_party/tcpdf/config/lang/jpn.php');
require_once(APPPATH.'third_party/tcpdf/tcpdf.php');


/**
 * TCPDF - CodeIgniter Integration
 */
class pdf extends TCPDF {

	/**
	 * Initialize
	 *
	 */
	function __construct($params = array())
	{
		$orientation = 'P';
		$unit = 'mm';
		$format = 'A4';
		$unicode = true;
		$encoding = 'UTF-8';
		$diskcache = false;

		if (isset($params['orientation'])) {
			$orientation = $params['orientation'];
		}
		if (isset($params['unit'])) {
			$unit = $params['unit'];
		}
		if (isset($params['format'])) {
			$format = $params['format'];
		}
		if (isset($params['encoding'])) {
			$encoding = $params['encoding'];
		}
		if (isset($params['diskcache'])) {
			$diskcache = $params['diskcache'];
		}

		# initialize TCPDF
		parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache);
	}
}

// END pdf Class

/* End of file pdf.php */
/* Location: ./application/libraries/pdf.php */