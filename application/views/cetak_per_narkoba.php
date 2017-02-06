<?php

include("mpdf60/mpdf.php");
//$mpdf=new mPDF ('utf-8','Legal');
$mpdf = new mPDF('',    // mode - default ''
'Legal',    // format - A4, for example, default ''
0,     // font size - default 0
'',    // default font family
20,    // margin_left
20,    // margin right
16,     // margin top
16,    // margin bottom
9,     // margin header
9,     // margin footer

 'L');  // L - landscape, P - portrait
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
	
	foreach($detail_narkoba as $data){
	$strhtml .="
		<table  width='100%' border='0'>
			<tr>
				<td rowspan='4' width='50%'>
				<img src='".base_url()."uploads/$data->foto' width='50%' >
				</td>
				<td>
				&nbsp;
				</td>
				<td>
				Nama Umum
				</td>
				<td>
				:
				</td>
				<td>
				$data->nama_umum
				</td>
			</tr>
			<tr>
			<td>
				&nbsp;
				</td>
				<td>
				Nama Khusus
				</td>
				<td>
				:
				</td>
				<td>
				 $data->nama_khusus
				</td>
			</tr>
			<tr>
			<td>
				&nbsp;
				</td>
				<td>
				Golongan Narkoba
				</td>
				<td>
				:
				</td>
				<td>
				 $data->nama_golongan
				</td>
			</tr>
			<tr>
			<td>
				&nbsp;
				</td>
				<td>
				Jenis Narkoba
				</td>
				<td>
				:
				</td>
				<td>
				$data->nama_jenis
				</td>
			</tr>
		</table>
	
	
	
	
	
	
	<hr>
	<br>
	";
	}
	$strhtml .='
	<h3>Penjelasan</h3>
		';
	foreach($detail_narkoba as $data){
		$strhtml .="$data->keterangan
		
		";
		
	}
	$strhtml .='
	<br>
	<hr>
	<h3>Efek Yang Ditimbulkan</h3>
	<table>
	
		';

	foreach($efek_narkoba as $data){
		$strhtml .="
		<tr>
		<td width='30%'>
		<h5>$data->nama_efek</h5>
		</td>
		<td>
		=
		</td>
		<td>
		<p>$data->penjelasan</p>
		</td>
		</tr>
		";
		
	}	
	$strhtml .='
	</table>
		';
	$mpdf->AddPage();

	
	
?>





<?php
			
			
			
			$mpdf->WriteHTML($stylesheet,1);
			$mpdf->WriteHTML($strhtml);
			$mpdf->Output();
			
			
				
			
?>
