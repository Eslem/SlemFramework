<?php

	$headers = "From:eslem@hotmail.com\r\n";
	$headers .= "Reply-To: jeaz03@hotmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Responsive email</title>
		<style type="text/css">
			body {margin: 10px 0; padding: 0 10px;  font-size: 13px;
			width:600px}
			table {border-collapse: collapse;}
			td {font-family: arial, sans-serif; color: #333333;}

			@media only screen and (max-width: 480px) {
				body,table,td,p,a,li,blockquote {
					-webkit-text-size-adjust:none !important;
				}
				table {width: 100% !important;}

				.responsive-image img {
					height: auto !important;
					max-width: 100% !important;
					width: 100% !important;
				}
			}
		</style>
	</head>
	<body>
		<table width="100%">
			<tr><td>Header</td></tr>
			<tr><td>
			<table border="0" cellpadding="0" cellspacing="0" align="left" width="49%">
				<tr>
					<td>Column 1</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" align="left" width="49%">
				<tr>
					<td>Column 1</td>
				</tr>
			</table>
			</td></tr>
			<tr><td>Footer</td></tr>
		</table>
	</body>
</html>';

	if(mail("jeaz03@hotmail.com","test",$message,$headers)){
		echo $message;
		print_r(error_get_last());
	}else{
		print_r(error_get_last());

	}
?>
