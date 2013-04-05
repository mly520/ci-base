<?php
/*
 * application/helpers/hoge_helper.php
 */

if ( ! function_exists('pr'))
{
	function pr($out)
	{
		echo print_r($out);
	}
}
