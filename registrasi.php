<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="validasi2.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" maxlength="10" name="nim"></td>	
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="25" name="nama"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>

			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="text" name="komentar"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jeniskelamin" value="laki-laki">Laki-Laki
					<input type="radio" name="jeniskelamin" value="perempuan">Perempuan</td>


			<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
				<select name="prodi">
				<option value="MI">MI</option>
				<option value="IF">IF</option>
				<option value="TT">TT</option>
				<option value="KA">KA</option>
				<option value="PH">PH</option>
				<option value="MP">MP</option>
				<option value="SM">SM</option>
				<option value="TK">TK</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIF">FIF</option>
				<option value="FRI">FRI</option>
				<option value="FIK">FIK</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FTE">FTE</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Berenang">Berenang</td>
			<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca</td>
			<td><input type="checkbox" name="hobi[]" value="Menulis">Menulis</td>
			<td><input type="checkbox" name="hobi[]" value="Nontonfilm">Nonton Film</td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td><input type="file" name="dokumen" id="dokumen"/><br><br>
			<input type="submit" name="upload" id="upload" values="upload"/></td>
		</tr>


		</form>
		</table>


</body>
</html>
