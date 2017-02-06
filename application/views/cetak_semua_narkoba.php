<?php

include("mpdf60/mpdf.php");
//$mpdf=new mPDF ('utf-8','Legal');
$mpdf = new mPDF('',    // mode - default ''
'Legal-L',    // format - A4, for example, default ''
0,     // font size - default 0
'',    // default font family
20,    // margin_left
20,    // margin right
16,     // margin top
16,    // margin bottom
9,     // margin header
9     // margin footer
);  // L - landscape, P - portrait
$date=date('d F Y');
$tahun=date('Y');
$strhtml .="
<html>
	<head>
		<style>
				
				.container {
					width: 970px;
					margin: auto;
					text-align: center;
				}
				.tengah {
					text-align: left;
				}

				.font{
					font-family: Arial, sans-serif;
				}
				.kanan{
					position: absolute;
					top: 570px;
					right: 200;	
					
				}
				table {
					border-collapse: collapse;

				}


				.garis{
					border: 0px solid black;
					
				}
		</style>
	</head>
	<body>
	<table  width='100%' border='0'>
		<tr>
			<td width='50px'><img border='1' src='".base_url()."assets/img/bnn2.png' width='100px'></td>
			<td  align='center'>
				<p><font size='20px'>BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA</font></p>
				<p><font size='20px'>SEKETARIATAN UTAMA</font></p>
				<p>Jl. MT. Haryono No. 11 Cawang, Jakarta Timur</p>
				<P>Tel/Fax : (021) - 80871566 / 80871567</P>
			</td>
		</tr>
	</table>
	<hr>
	";
	$i=0;
	$strhtml .="
		<table  width='100%' border='1'>
			<tr>
				<th width='5%'>NO</th>
				<th>Nama Umum Narkoba</th>
				<th>Nama Khusus Narkoba</th>
				<th>Golongan Narkoba</th>
				<th>Jenis Narkoba</th>
				
			</tr>
			
		
	
	";
	foreach($detail_narkoba as $data){
		++$i;
	$strhtml .="
	
			<tr>
				<td><center>$i</center></td>
				<td>$data->nama_umum</td>
				<td>$data->nama_khusus</td>
				<td>$data->nama_golongan</td>
				<td>$data->nama_jenis</td>
				
			</tr>

	";
	
	}
	$strhtml .='
	</table>
		';

	
	
	
	
	
?>





<?php
			
			
			
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			
				
			
?>
