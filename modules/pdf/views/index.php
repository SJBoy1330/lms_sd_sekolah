<!DOCTYPE html>
<html>
<head>
	<title>contoh surat pengunguman</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
            width: 50%;
		}
        table.data, th.data, td.data {
            border:1px solid black;
            height: 35px;
            text-align: center;
        }
		table tr .text2 {
			text-align: right;
			font-size: 15px;
		}
		table tr .text {
			text-align: center;
			font-size: 15px;
		}
		table tr td {
			font-size: 15px;
		}

	</style>
</head>
<body>
	<center>
		<table style="margin-top: 50px;">
			<tr>
				<td><img src="<?= base_url('assets/img/alphatech-logo.png')?>" width="90" height="90"></td>
				<td>
				<center>
					<font size="4">LEMBAGA PERATIKUM 2019</font><br>
					<font size="5"><b>SMK ALPHATECH INDONESIA</b></font><br>
					<font size="2">Bidang Keahlian : Bisnis dan Menejemen - Teknologi informasi dan Komunikasi</font><br>
					<font size="2"><i>Jln Cut Nya'Dien No. 02 Kode Pos : 68173 Telp./Fax (0331)758005 Tempurejo Jember Jawa Timur</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
            <table width="625">
                <tr>
                    <td class="text2" style="font-size: 15px;">Jember, 16 mei 2019</td>
                </tr>
            </table>
            <table class="data">
                <tr>
                    <th class="data" width="50">No</th>
                    <th class="data">Foto</th>
                    <th class="data">Nama</th>
                    <th class="data">User ID</th>
                    <th class="data">Tipe</th>
                    <th class="data">Aktif</th>
                </tr>
                <tr>
                    <td class="data">1</td>
                    <td class="data"><img src="<?= base_url('assets/img/alphatech-logo.png')?>" width="50"></td>
                    <td class="data">Jhond Doe</td>
                    <td class="data">Superadmin</td>
                    <td class="data">Admin</td>
                    <td class="data">Aktif</td>
                </tr>
                <tr>
                    <td class="data">2</td>
                    <td class="data"><img src="<?= base_url('assets/img/alphatech-logo.png')?>" width="50"></td>
                    <td class="data">Jhond Doe</td>
                    <td class="data">Staf</td>
                    <td class="data">Staf</td>
                    <td class="data">Tidak Aktif</td>
                </tr>
            </table>
		</table>
	</center>
</body>
</html>