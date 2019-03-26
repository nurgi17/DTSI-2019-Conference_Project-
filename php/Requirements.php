<?php
	header("Content-disposition:attachment;
		      filename=Requirements.docx");
	header("Content-type: application/docx");
	readfile("Requirements.docx");
?>