<?php

		$home = $_SERVER['DOCUMENT_ROOT'];
		$dir = $home . '../pictures/gallary';
		$handle = opendir($dir);
		$arr = [];
		while (false !== ($file = readdir($handle))) { 
			if ($file != "." && $file != "..") { 
			    $arr[] = $file; 
			} 
		}
		
		$sxe = new SimpleXMLElement($xmlstr);
		$our_ul = '<ul id="slidewrapper">';
		$li = addChild('li', '');
		$li_attr = addAttribute('id', 'slidewrapper');
		$im = addChild('img', '');
		$im_src = addAttribute('src', '$ar');
		$im_alt = addAttribute('alt', '3');
		$im_class = addAttribute('class', 'slide-img');

		foreach ($arr as $ar) {
			$new = $sxe->$our_ul->$li->$li_attr->$im->$im_src->$im_alt->$im_class;
			echo $sxe->asXML();
		}	
		$home = $_SERVER['DOCUMENT_ROOT'];
		$dir = $home . '/pictures/gallary';
		$handle = opendir($dir);
		$arr = [];
		while (false !== ($file = readdir($handle))) { 
			if ($file != "." && $file != "..") { 
			    $arr[] = $file; 
			} 
		}
		
		$g = json_encode($arr);
		echo ($g);
?>
