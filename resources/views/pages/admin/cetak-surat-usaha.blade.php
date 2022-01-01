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
					   Lampung Selatan menerangkan dengan sesungguhnya bahwa: </font>
		       </td>
		    </tr>
		</table>
		<br>
		</table>
		<table width="625">
			<tr class="text2">
				<td>Nama</td>
				<td width="450">: <b>{{ $data->user->name }}</b></td>
			</tr>
			<tr class="text2">
				<td>Tempat, Tanggal Lahir</td>
				<td width="450">: <b>{{ $data->user->place_of_born }}, {{$data->user->born}}</b></td>
			</tr>
			<tr class="text2">
				<td>Jenis Kelamin</td>
				<td width="450">: <b>{{ $data->user->gender }}</b></td>
			</tr>
			<tr class="text2">
				<td>Pekerjaan</td>
				<td width="450">: <b>{{ $data->user->job }}</b></td>
			</tr>
			
			<tr class="text2">
				<td>Agama</td>
				<td width="450">: <b>{{ $data->user->religion }}</b></td>
			</tr>
			<tr class="text2">
				<td>NIK</td>
				<td width="450">: <b>{{ $data->user->nik }}</b></td>
			</tr>
			<tr class="text2">
				<td>Status Perkawinan</td>
				<td width="450">: <b>{{ $data->user->status }}</b></td>
			</tr>
			<tr class="text2">
				<td>Alamat</td>
				<td width="450">: <b>{{ $data->user->address }}</b></td>
			</tr>
			
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
			       <font size="2">Benar bahwa nama tersebut diatas mempunyai usaha terletak di desa Kalisari yaitu usaha <b><u>{{ $data->business_name }}</u></b> yang beralamatkan di <b><u>{{ $data->business_address }}</u></b> <br><br>
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