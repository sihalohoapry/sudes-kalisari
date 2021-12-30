<!DOCTYPE html>
<html>
<head>
	<style type="text/css"media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }

		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
		<table>
			<tr>
				<td><img src="{{ asset('images/logo_lampung_selatan.png') }}" width="90" height="90"></td>
				<td>
				<center>
					<font size="5"><b>PEMERINTAH KABUPATEN LAMPUNG SELATAN</b></font><br>
					<font size="5"><b>KECAMATAN NATAR</b></font><br>
					<font size="5"><b>DESA KALISARI</b></font><br>
                </center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		<table width="625">
			<tr>
				<font  size="3"><b><u>SURAT KETERANGAN KELAHIRAN</u></b>
                    
                </font><br>
                
			</tr>
		</table>
		</table>
		<table>
			<tr class="text2">
				<td>Nomer</td>
				<td width="572">: </td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td width="564">: -</td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Yang bertanda tangan dibawah ini Kepala Desa Kali Sari Kecamatan Natar Kabupaten 
					   Lampung Selatan menerangkan bahwa: <br>Telah lahir seorang anak pada :</font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Hari</td>
				<td width="450">: <b>{{ $data->day_of_born }}</b></td>
			</tr>
			<tr class="text2">
				<td>Tanggal</td>
				<td width="450">: <b>{{ $data->born }}</b></td>
			</tr>
			<tr class="text2">
				<td>Jam</td>
				<td width="450">: <b>{{ $data->time_of_born }}</b></td>
			</tr>
			<tr class="text2">
				<td>Tempat</td>
				<td width="450">: <b>{{ $data->place_of_born }}</b></td>
			</tr>
			<tr class="text2">
				<td>Anak Dari :</td>
			</tr>
			<tr class="text2">
				<td>Nyonya</td>
				<td width="450">: <b>{{ $data->name_mother }}</b></td>
			</tr>
			<tr class="text2">
				<td>Tuan</td>
				<td width="450">: <b>{{ $data->name_father }}</b></td>
			</tr>
			<tr class="text2">
				<td>Anak ke-</td>
				<td width="450">: <b>{{ $data->son_of }}</b></td>
			</tr>
			<tr class="text2">
				<td>Nama anak</td>
				<td width="450">: <b>{{ $data->name_son }}</b></td>
			</tr>
			
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Surat keterangan ini diminta oleh bersangkutan untuk keperluan <b><u>{{ $data->letter_interests }}</u></b> <br><br>
					   Demikian surat keterangan ini dibuat dengan sebenarnya, kepada yang bersangkutan untuk dapat digunakan seperlunya.
</font>
		       </td>
		    </tr>
		</table>
		<br>
		<table width="625">
			<tr>
				<td width="430"><br><br><br><br></td>
				<td class="text" style="text-align:left ">Kali Sari, {{ date('d-m-Y') }}<br>Mengetahui<br>An.Kepala Desa Kali Sari
					<br>SEKDES<br><br><br><br><u>DENI SAPUTRA</u></td>
			</tr>
	     </table>
	</center>
</body>
</html>