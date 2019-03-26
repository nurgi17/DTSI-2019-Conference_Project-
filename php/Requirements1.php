<?php
	header("Content-disposition:attachment;
		      filename=Requirements1.docx");
	header("Content-type: application/docx");
	readfile("Requirements1.docx");
?>
