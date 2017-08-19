<?php
	
	ob_start('ob_gzhandler');
	
	if(isset($_GET['filename']))
	{
		header('Content-type: text/css');
		echo file_get_contents($_GET['filename']);
	}
	
	ob_end_flush();
	
?>